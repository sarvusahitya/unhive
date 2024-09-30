@extends('layouts/master')

@section('body')

<div class="container form-container mt-4">
    <div class="row justify-content-center">
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="dd">
            <div class="card-body">
                <h5 class="card-title" id="product-name">dd</h5>
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control quantity-input" id="quantity" data-product-id="" value="0">
                <button class="btn btn-primary mt-2 update-quantity" id="update-quantity-btn" data-product-id="dd">Update Quantity</button>
            </div>
        </div>
    </div>
</div>

<!-- Custom styling for mobile and desktop responsiveness -->
<style>

</style>

<script>
    var urlParams = new URLSearchParams(window.location.search);
    var product_guid = urlParams.get('product_guid');
    var contact_guid = urlParams.get('contact_guid');

    $(document).ready(function() {

        var formData = new FormData();
        formData.append('product_guid', product_guid); // Add your data to FormData
        formData.append('contact_guid', contact_guid); // Add your data to FormData

        $.ajax({
            url: "{{ config('constants.API_URL') }}productbyguid",
            processData: false, // Important! Tell jQuery not to process the data
            contentType: false, // Important! Tell jQuery not to set contentType

            method: 'POST',
            data: formData, // Send the FormData object
            success: function(product) {
                $('#product-card').show();
                $('#product-name').text(product.product_name);
                $('#product-image').attr('src', product.image_url || 'https://via.placeholder.com/150');
                $('#quantity').val(product.quantity || 0); // Set the quantity if it exists, else default to 0
                $('#update-quantity-btn').data('product-id', product.id);
            }
        });

    });
    $('#update-quantity-btn').on('click', function() {
        var productId = $(this).data('product-id');
        var quantity = $('#quantity').val();
        var contact_id = $('#contact_id').val();



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
</script>

@endsection