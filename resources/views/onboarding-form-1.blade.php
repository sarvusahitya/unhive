@extends('layouts/master')


@section('body')





<div class="container form-container ">
    <div class="row p-3">
        <form id="StoreForm" name="StoreForm">
            <h4 class="bg-success p-3 heading text-white bg-opacity-10 ">Store Details:Step 1</h4>
            <div class="form-group">
                <label for="storeName">What is the name of your Retail Store? </label> <span class="text-danger">*</span>
                <input type="text" class="form-control" id="name_of_store" name="name_of_store" required>
            </div>
            <div class="form-group">
                <label for="gst_number">GST Number? </label> <span class="text-danger">*</span>
                <input type="text" class="form-control" id="gst_number" name="gst_number" required>
            </div>
            <div class="form-group">
                <label for="do_you_have_multiple_location">Do you have multiple locations?</label>
                <select class="form-control" id="do_you_have_multiple_location" name="do_you_have_multiple_location">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
                <div class="d-none  m-1  multiple_location">

                    <label for="selectstore">How much you have store?</label>
                    <select class="form-control" id="no_of_location" name="no_of_location">
                        <option value="1">
                            < 5 Store</option>
                        <option value="2">Up to 10 store</option>
                        <option value="3">Up to 20 store</option>
                        <option value=">4">>20 Store</option>

                    </select>
                </div>
            </div>
            <div class="form-group">

                <label for="head_office_address">Store Address?</label> <span class="text-danger">*</span>

                <input type="text" class="form-control input-with-icon " id="head_office_address" name="head_office_address" required placeholder="Please Enter Your Address">
            </div>


            <div class="form-group">

                <label for="head_office_address2">Store Address 2 (optional)</label>

                <input type="text" class="form-control input-with-icon " id="head_office_address2" name="head_office_address2" placeholder="Location">

            </div>
            <div class="row">


                <div class="form-group col-md-4 ">
                    <label for="state">State / Province</label>
                    <input type="text" class="form-control" id="state" name="state">
                </div>
                <div class="form-group col-md-4 ">

                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group col-md-4 ">
                    <label for="pincode">ZIP / Postal code</label>
                    <input type="text" class="form-control" id="pincode" name="pincode">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>
</div>

<script>
    $('#do_you_have_multiple_location').change(function() {
        // Check if the selected value is 'yes'
        if ($(this).val() == 'yes') {
            // Remove the 'd-none' class to show the hidden div
            $('.multiple_location').removeClass('d-none');
        } else {
            // Optionally, add 'd-none' back if 'no' is selected
            $('.multiple_location').addClass('d-none');
        }
    });
    $("#StoreForm").submit(function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function(form) {
            loaderShow();

            var apiurl = "{{ config('constants.API_URL')}}onboardingstep1"
            var method = "POST";
            var formData = new FormData(form);

            $.ajax({
                method: method,
                url: apiurl,
                processData: false,
                contentType: false,
                data: formData,
                success: function(response) {


                    if (response.status == true) {

                        ShowToastMessage("Saved Successfully")
                        console.log(response.data.guid);
                        setTimeout(() => {

                            window.location.href = "onboarding-form-2?guid=" + response.data.guid;
                        }, 800);

                    } else {
                        errorMessageHandler(response)

                    }

                },
                complete: function() {
                    loaderHide();

                    $("#loading").hide();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    errorMessageHandler(xhr)


                }
            });
        }
    });
    $('#gst_number').on('keypress', function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>
@endsection