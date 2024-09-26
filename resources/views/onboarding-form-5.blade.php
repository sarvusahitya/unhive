@extends('layouts/master')
@section('body')
<div class="container form-container ">
    <form id="documentUploadForm" enctype="multipart/form-data">
        <div class="form-group col-12 ">
            <h4 class="bg-success  heading text-white bg-opacity-10  p-3 ">Document Collection: Step 5</h4>
        </div>
        <div class="form-group col-12 mt-5">
            <label for="panCard">Upload PAN Card </label> <span class="text-danger">*</span>
            <div class="custom-file">
                <input type="file" class="custom-file-input cmncommon-upload" data-document_type="pancard" data-folder_name="pancard" id="panCard" name="pan_card">
                <label class="custom-file-label" for="panCard">Choose file</label>
            </div>
        </div>
        <div class="form-group col-12 mt-5">
            <label for="gstCertificate">Upload GST Certificate </label> <span class="text-danger">*</span>
            <div class="custom-file">
                <input type="file" class="custom-file-input cmncommon-upload" data-document_type="gst" data-folder_name="gst" id="gstCertificate" name="gst_certificate">
                <label class="custom-file-label" for="gstCertificate">Choose file</label>
            </div>
        </div>
        <div class="form-group col-12 mt-5">
            <label for="cancelledCheque">Upload Cancelled Cheque </label> <span class="text-danger">*</span>
            <div class="custom-file">
                <input type="file" class="custom-file-input cmncommon-upload" data-document_type="cancelledcheque" data-folder_name="cancelledcheque" id="cancelledCheque" name="cancelled_cheque">
                <label class="custom-file-label" for="cancelledCheque">Choose file</label>
            </div>
        </div>
        <div class="form-group col-12 mt-5">
            <label for="aadharCard">Upload Aadhar Card </label> <span class="text-danger">*</span>
            <div class="custom-file">
                <input type="file" class="custom-file-input cmncommon-upload" data-document_type="aadhar" data-folder_name="aadhar" id="aadharCard" name="aadhar_card">
                <label class="custom-file-label" for="aadharCard">Choose file</label>
            </div>
        </div>
        <div class="form-group col-12">
            <button type="button" class="btn btn-primary nextbutton">Next</button>
        </div>
    </form>

    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var guid = urlParams.get('guid');


        $('.nextbutton').on('click', function() {
            window.location.href = "onboarding-form-6?guid=" + guid;

        });
        $('.cmncommon-upload').on('change', function() {
            // Create FormData object
            var formData = new FormData();
            var apiurl = "{{ config('constants.API_URL')}}uploaddocuments"

            // Append the file and other data to formData
            formData.append('file', $(this)[0].files[0]);
            formData.append('folder_name', $(this).data("folder_name"));
            formData.append('document_type', $(this).data("document_type"));
            formData.append('guid', guid);

            // AJAX request
            $.ajax({
                url: apiurl, // Replace 'yourdomain.com' with your actual domain
                type: 'POST',
                data: formData,
                contentType: false, // This is required for FormData
                processData: false, // This is required for FormData
                success: function(response) {
                    ShowToastMessage("File uploaded successfully")

                },
                error: function(xhr, status, error) {
                    alert('Error uploading file');
                    console.log(xhr.responseText);
                    errorMessageHandler(xhr)

                }
            });
        });
    </script>
    @endsection