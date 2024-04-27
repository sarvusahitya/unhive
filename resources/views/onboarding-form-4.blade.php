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
<div class="container form-container ">
    <form id="StoreForm">
        <div class="form-group col-12 ">
            <h4 class="bg-success  heading text-white bg-opacity-10  p-3 ">Affordability Activation: Step 4</h4>
        </div>
        <div class="row p-3">
            <div class="form-group col-12">
                <label for="pinlab_id">PinalLab ID ?</label>
                </br><span class="text-muted"> Please Mention any information you may have.</span></br>

                <textarea class="form-control" id="pinlab_id" name="pinlab_id" placeholder="TID:XXXXXX,PID:XXXXXX, POS ID : XXXXXX"></textarea>
            </div>
            <div class="form-group col-12">
                <label for="bajaj_finance_id">Bajaj Finance ID? </label>
                </br><span class="text-muted"> Please Mention any information you may have.</span></br>
                <input type="text" class="form-control" id="bajaj_finance_id" name="bajaj_finance_id" placeholder="BFID: XXXX">
            </div>
            <div class="form-group col-12 ">
                <label for="paytm">PayTM?</label>
                </br><span class="text-muted"> Please Enter Your POS terminal ID.</span></br>
                <input type="text" class="form-control" id="paytm" name="paytm">
            </div>

            <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Next</button>
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




                var apiurl = "{{ config('constants.API_URL')}}onboardingstep4"
                var method = "POST";
                var formData = new FormData(form);
                formData.append("guid", guid)




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
                                window.location.href = "onboarding-form-5?guid=" + response.data.guid;

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