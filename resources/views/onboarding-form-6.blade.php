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
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container form-container ">
    <form id="StoreForm">
        <div class="form-group col-12 ">
            <h4 class="bg-success  heading text-white bg-opacity-10  p-3 ">Review Agreement: Step 6</h4>
        </div>
        <div class="form-group col-12">
            <label>Review all the Terms & Conditions, Policies, and Schemes (if any) as attached in the Onboarding email.</label>
        </div>
        <div class="form-group col-12 pl-5">
            <input type="checkbox" class="form-check-input" id="is_terms_verify" name="is_terms_verify">
            <label class="form-check-label" for="understandCheckbox">I/We understand the following policies mentioned here "<a href="#">Price List</a>", "<a href="#">Payment terms</a>", "<a href="#">Demo Policy</a>", "<a href="#">DOA Policy</a>", "<a href="#">Price Drop Protection</a>" *</label>
        </div>
        <div class="form-group col-12">
            <i class="fa fa-check-circle" style="color: green;"></i>
            Link to review the policies - <a href="https://ankitjm.notion.site/Policies-ba0aad7dd5764720b45488d1b9d5b7a9">Click Here </a>
        </div>

        <div class="form-group  col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var guid = urlParams.get('guid');

        $("#StoreForm").submit(function(e) {
            e.preventDefault();
        }).validate({
            submitHandler: function(form) {
                loaderShow();




                var apiurl = "{{ config('constants.API_URL')}}onboardingstep3"
                var method = "POST";
                var formData = new FormData(form);
                formData.append("guid", guid)

                var isTermsVerified = $('#is_terms_verify').is(':checked') ? 1 : 0;
                formData.append("is_terms_verify", isTermsVerified);




                $.ajax({
                    method: method,
                    url: apiurl,
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {



                        if (response.status == true) {

                            ShowToastMessage("thanks for submitting")
                            setTimeout(() => {
                                window.location.href = "onboarding-form-1?guid=" + response.data.guid;

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