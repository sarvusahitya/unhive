@extends('layouts/master')
@section('body')

<style>
    .container {
        max-width: 800px;
        /* Adjust this value as needed */
        margin: 0 auto;
        /* Centers the container horizontally */
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
        margin-top: 20px;
    }

    /* Adjust form width for mobile */
    @media (max-width: 500px) {
        .form-container {
            padding: 0 15px;
        }

    }

    .heading {
        border-radius: 5px;
        font-size: medium;
    }

    /* @media (max-width: 768px) { */
    .iti {
        width: 100%;
        /* Full width on smaller screens */
    }

    /* } */

    .iti__flag-container {
        display: flex;
        align-items: center;
    }

    .iti__selected-flag {
        cursor: pointer;
    }

    .iti__country-list {
        max-height: 200px;
        /* Adjust based on preference */
        overflow-y: auto;
        /* Scrollable list */
    }
</style>

<form id="StoreForm">
    <div class="form-group col-12 ">
        <h4 class="bg-success  heading text-white bg-opacity-10  p-3 ">Owner Contact Details: Step 2</h4>
    </div>
    <div class="row p-3">
        <div class="form-group col-12">
            <label for="owner_full_name">Full Name</label> <span class="text-danger">*</span>
            <input type="text" class="form-control" id="owner_full_name" name="owner_full_name" required placeholder="Enter Owners full Name">
        </div>
        <div class="form-group col-12">
            <label for="owner_mobile_no">Mobile Number</label> <span class="text-danger">*</span>
            <input type="tel" class="form-control" id="owner_mobile_no" name="owner_mobile_no" maxlength="10" required placeholder="Enter Owners Mobile Number">
        </div>
        <div class="form-group col-12 ">
            <label for="owner_mobile_is_whatsapp">Is This mobile Number availble on Whatsapp
                messaging?</label>
            </br><span class="text-muted"> We will be sending you communication via Whatsapp.</span></br>


            <div class="custom-control custom-switch ">
                <input type="checkbox" class="custom-control-input" id="owner_mobile_is_whatsapp" name="owner_mobile_is_whatsapp" checked>
                <label class="custom-control-label" for="owner_mobile_is_whatsapp"></label>
            </div>


        </div>
        <div class="form-group col-12  d-none whatsapp_available">
            <label for="owner_mobile_whatsappnumber"> Whatsapp Number</label>
            <input type="number" class="form-control" id="owner_mobile_whatsappnumber" name="owner_mobile_whatsappnumber">
        </div>
        <div class="form-group col-12">
            <label for="owner_email">Email</label> <span class="text-danger">*</span>
            <input type="email" class="form-control" id="owner_email" name="owner_email" placeholder="Enter Owners Email address" required>
        </div>
        <div class="form-group col-12">
            <label for="owner_date_of_birth">Date of Birth</label> <span class="text-danger">*</span>
            <input type="date" class="form-control input-with-icon" id="owner_date_of_birth" name="owner_date_of_birth" required placeholder="Location">
        </div>
        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
        <p id="result"></p>
</form>


<script>
    var urlParams = new URLSearchParams(window.location.search);
    var guid = urlParams.get('guid');
    $('#owner_mobile_is_whatsapp').change(function() {
        // Check if the selected value is 'yes'
        if ($(this).prop("checked")) {
            $('.whatsapp_available').addClass('d-none');
            // Remove the 'd-none' class to show the hidden div
        } else {
            // Optionally, add 'd-none' back if 'no' is selected
            $('.whatsapp_available').removeClass('d-none');
        }
    });
    var input = document.querySelector("#owner_mobile_no"),
        form = document.querySelector("#StoreForm"),
        result = document.querySelector("#result");

    var iti = intlTelInput(input, {
        initialCountry: "in"
    });

    $("#StoreForm").submit(function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function(form) {
            loaderShow();




            var apiurl = "{{ config('constants.API_URL')}}onboardingstep2"
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
                            window.location.href = "onboarding-form-3?guid=" + response.data.guid;

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