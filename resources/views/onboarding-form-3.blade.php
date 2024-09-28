@extends('layouts/master')
@section('body')
<div class="container form-container ">
    <div class="row p-3">
        <form id="StoreForm">
            <div class="form-group col-12 ">
                <h4 class="bg-success  heading text-white bg-opacity-10  p-3 ">Store Information: Step 3</h4>
            </div>
            <div class="row p-3">
                <div class="form-group col-12  ">
                    <label for="do_you_have_store_manager">Do you have Store Manager?</label>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input form-control" id="do_you_have_store_manager" name="do_you_have_store_manager" checked>
                        <label class="custom-control-label" for="do_you_have_store_manager"></label>
                    </div>



                </div>

                <div class="form-group col-12 storemanageerdiv">
                    <label for="store_manager_full_name"> Store Manager Full Name </label> <span class="text-danger">*</span>
                    <input type="text" class="form-control" id="store_manager_full_name" name="store_manager_full_name" placeholder="Enter Store Manager Full Name" required>
                </div>
                <div class="form-group col-12 storemanageerdiv">
                    <label for="store_manager_mobile">Store Manager Mobile Number</label> <span class="text-danger">*</span>
                    <input type="tel" class="form-control" id="store_manager_mobile" name="store_manager_mobile" maxlength="10" required placeholder="Enter Store Manager Mobile Number">

                </div>
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
        </form>
    </div>
</div>
<script>
    var urlParams = new URLSearchParams(window.location.search);
    var guid = urlParams.get('guid');

    var input = document.querySelector("#store_manager_mobile"),
        form = document.querySelector("#StoreForm"),
        result = document.querySelector("#result");

    var iti = intlTelInput(input, {
        initialCountry: "in"
    });

    $('#do_you_have_store_manager').change(function() {
        // Check if the selected value is 'yes'
        console.log($(this).prop("checked"))
        if ($(this).prop("checked")) {
            $('.storemanageerdiv').removeClass('hidden-but-space').addClass('visible');

            // Remove the 'd-none' class to show the hidden div
        } else {
            $('.storemanageerdiv').removeClass('visible').addClass('hidden-but-space');
        }
    });
    $("#StoreForm").submit(function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function(form) {
            loaderShow();




            var apiurl = "{{ config('constants.API_URL')}}onboardingstep3"
            var method = "POST";
            var formData = new FormData(form);
            formData.append("guid", guid)

            var num = iti.getNumber(),
                valid = iti.isValidNumber();
            // if (!valid) {
            //     ShowToastMessage("Your Mobile Number Format Is Wrong Please Try again ", "warning")

            //     return false;
            //     // result.textContent = "Number: " + num + ", valid: " + valid;
            // }

            var countryData = iti.getSelectedCountryData();

            formData.append("owner_mobile_countrycode", countryData.dialCode)
            formData.append("owner_mobile_countrystr", countryData.iso2)



            $.ajax({
                method: method,
                url: apiurl,
                processData: false,
                contentType: false,
                data: formData,
                success: function(response) {



                    if (response.status == true) {

                        ShowToastMessage("Saved Successfully")
                        setTimeout(() => {
                            window.location.href = "onboarding-form-4?guid=" + response.data.guid;

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
</script>
@endsection