@extends('layouts/master')

@section('body')

<div class="container form-container mt-4">
    <div class="row justify-content-center">
        <div class="col-3 ">
            <!-- Back Arrow for Home Page -->
            <a href="{{URL::asset('search-retailer')}}" class="form-label btn btn-info">
                <i class="bi bi-house-fill"></i> Home
            </a>

        </div>
        <div class="col-9 ">
            <!-- Back Arrow for Home Page -->
            <h2 id="retailer-title"></h2>
            <span id="last-updated"></span>
        </div>

        <div class="col-md-12 col-sm-12 ">
            <div class="form-group">
                <label for="status">Category</label>
                <select id="product_category" name="product_category" required class="select2">
                </select>
            </div>
        </div>








        <!-- Repeat for more products -->


        <div class="col-md-6  col-sm-12 d-none">


            <div class="form-group">
                <label for="search-input" class="form-label">Search Product </label>
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control" placeholder="Enter Product Name..." autocomplete="off">
                </div>
                <ul id="suggestions" class="list-unstyled mt-1"></ul>
            </div>
        </div>
        <div class="product_list">

        </div>

    </div>
</div>

<script>
    var urlParams = new URLSearchParams(window.location.search);
    var contact_guid = urlParams.get('contact_guid');
    getcontactdetails(contact_guid);
    getallcategory();
    setTimeout(() => {

        getProductData(contact_guid);
    }, 500);


    $(document).ready(function() {



        $('#search-input').on('keypress keydown keyup', function() {
            var query = $('#search-input').val();
            var product_category = $("#product_category").val()

            var formData = new FormData();
            formData.append('query', query); // Add your data to FormData
            formData.append('product_category', product_category); // Add your data to FormData





            // If query length is greater than 3, trigger search
            if (query.length > 2) {
                $.ajax({
                    url: "{{ config('constants.API_URL') }}search-products",
                    processData: false, // Important! Tell jQuery not to process the data
                    contentType: false, // Important! Tell jQuery not to set contentType
                    method: 'POST',
                    data: formData,
                    success: function(data) {
                        $('#suggestions').empty();
                        if (data.length > 0) {
                            $.each(data, function(index, product) {
                                $('#suggestions').append('<li> <a href="retailer-product-detail?product_guid=' + product.guid + '&contact_guid=' + contact_guid + '">' + product.product_name + '<br>(' + product.category_name + ')</a></li>');
                            });
                        } else {
                            $('#suggestions').append('<li>No products found</li>');
                        }
                    }
                });
            } else {
                $('#suggestions').empty(); // Clear the suggestion list if query is less than 4
            }
        });
    });


    function getProductData(contact_guid) {
        var formData = new FormData();
        var product_category = $("#product_category").val()

        formData.append('product_category', product_category); // Add your data to FormData

        formData.append('contact_guid', contact_guid); // Add your data to FormData

        $.ajax({
            url: "{{ config('constants.API_URL') }}getallproductsbycategory",
            processData: false, // Important! Tell jQuery not to process the data
            contentType: false, // Important! Tell jQuery not to set contentType
            method: 'POST',
            data: formData, // Send the FormData object
            success: function(data) {
                $('.product_list').html("")

                $.each(data, function(i, item) {


                    var bindlist =
                        '<div class="col-md-6 col-lg-12 mb-4">' +
                        '<div class="card h-100">' +
                        '<div class="card-body">' +
                        '<h5 class="card-title">' + item.product_name + '</h5>' +
                        '<div class="input-group">' +
                        '<button class="btn btn-outline-secondary decrement" type="button" data-product-id="' + item.id + '">-</button>' +
                        '<input type="number" id="quantity-' + item.id + '" class="form-control quantity-input prod_' + item.id + '" data-product-id="' + item.id + '" value="' + item.quantity + '">' +
                        '<button class="btn btn-outline-secondary increment" type="button" data-product-id="' + item.id + '">+</button>' +
                        '</div>' +
                        '<button class="btn btn-primary mt-2 update-quantity   " data-product-id="' + item.id + '" data-quantity="' + item.quantity + '" >Update Quantity</button>' +
                        '</div>' +
                        '</div>' +
                        '</div>';



                    $('.product_list').append(bindlist)

                });



            }
        });
    }
    $(document).on('change', '#product_category', function() {
        getProductData(contact_guid)
    });

    $(document).on('click', '.decrement', function() {

        var productId = $(this).data('product-id');
        var input = $('#quantity-' + productId);
        var value = parseInt(input.val());
        if (value > 1) {
            input.val(value - 1);
        }
    });
    $(document).on('click', '.increment', function() {

        var productId = $(this).data('product-id');
        var input = $('#quantity-' + productId);
        var value = parseInt(input.val());
        input.val(value + 1);
    });
    $(document).on('click', '.update-quantity', function() {


        var productId = $(this).data('product-id');
        var quantity = $(".prod_" + productId).val();


        $.ajax({
            url: "{{ config('constants.API_URL') }}updatequantity",
            method: 'POST', // Make sure this matches your route method
            data: {
                product_id: productId,
                quantity: quantity,
                contact_guid: contact_guid
            },
            success: function(response) {
                ShowToastMessage(response.message)

            },
            error: function(xhr) {
                ShowToastMessage("Error updating quantity", "failed")

            }
        });
    });


    function getallcategory() {
        loaderShow();
        var formdata = {};
        $.ajax({
            method: "POST",
            url: "{{ config('constants.API_URL')}}getproductallcategory",
            //dataType: "json",
            data: formdata,

            success: function(response) {

                $("#product_category").html("")

                if (response.data.length != 0) {
                    $.each(response.data, function(i, item) {
                        var row = "<option value='" + item.category_name + "'>" + item.category_name + "</option>";
                        $("#product_category").append(row)
                    });
                } else {
                    var row = "<tr><td colspan='4' style='text-align:center'>No Data Found</td></tr>"
                    $("#product_category").append(row)

                }


            },
            complete: function() {

                $("#product_category").select2();
            },
            error: function(xhr, ajaxOptions, thrownError) {}
        });
    }

    function getcontactdetails(contact_guid) {

        var formData = new FormData()

        formData.append('guid', contact_guid); // Add your data to FormData
        $.ajax({
            method: "POST",
            url: "{{ config('constants.API_URL')}}getcontactbyguid",
            processData: false, // Important! Tell jQuery not to process the data
            contentType: false, // Important! Tell jQuery not to set contentType
            method: 'POST',
            data: formData, // Send the FormData object
            success: function(response) {


                var updated_at = formatDate(response[0].updated_at)
                var title = response[0].contact_name
                var last = "(Last Updated " + updated_at + " )"

                $('#retailer-title').text(title)
                $('#last-updated').text(last)
            },
            complete: function() {

            },
            error: function(xhr, ajaxOptions, thrownError) {}
        });
    }
</script>

@endsection