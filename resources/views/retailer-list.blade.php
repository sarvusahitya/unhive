@extends('layouts/master')

@section('body')

<div class="container form-container mt-4">
    <div class="row justify-content-center">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Contact Name</th>
                    <!-- <th>Billing City</th> -->
                    <th>CF Sales Person Name</th>
                </tr>
            </thead>
        </table>

    </div>




    <script>
        $(document).ready(function() {
            // Initialize DataTable with AJAX source
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ config(key: 'constants.API_URL') }}retailerlist",
                    data: function(d) {
                        // Pass additional parameters to the server (if needed)
                        d.search = d.search.value; // Global search value
                        d.sort_by = d.columns[d.order[0].column].data; // Sorting column
                        d.sort_order = d.order[0].dir; // Sorting direction
                        d.limit = d.length; // Number of records per page
                    }
                },
                columns: [
                    // {
                    //     data: 'id'
                    // },
                    {
                        data: 'contact_name'
                    },
                    // {
                    //     data: 'billing_city'
                    // },
                    {
                        data: 'cf_sales_person_name'
                    },
                    // {
                    //     data: null,
                    //     orderable: false,
                    //     searchable: false,
                    //     render: function(data, type, row) {
                    //         return '<a class="btn btn-primary btn-sm export-btn"  href="javascript:void(0);" data-id="' + row.id + '">Export</a>';
                    //     }
                    // }
                ],
                dom: 'Bfrtip', // This enables the button container

                buttons: [{
                    text: 'Export', // Button text
                    className: 'btn btn-info btn-sm export-btn',

                }],
                order: [
                    [0, 'desc']
                ], // Default sorting (by ID descending)
                pageLength: 10, // Default number of records per page
            });
        });
        $(document).on('click', '.export-btn', function(e) {

            e.preventDefault();
            var formData = new FormData();



            // var id = $(this).data('id'); // Get the ID from the button's data attribute
            // formData.append('contact_id', id); // Add your data to FormData
            $.ajax({
                url: "{{ config('constants.API_URL') }}generateexportretailer", // Replace with your API endpoint for exporting
                processData: false, // Important! Tell jQuery not to process the data
                contentType: false, // Important! Tell jQuery not to set contentType
                method: 'POST',
                data: formData,
                success: function(response) {
                    console.log(response.link)
                    if (response.link != "") {

                        ShowToastMessage(response.message, );
                        setTimeout(() => {
                            window.location.href = response.link
                        }, 500);
                    } else {
                        ShowToastMessage(response.message, "failed");

                    }

                    // Assuming the API response contains the file URL for download

                },
                error: function(xhr, status, error) {
                    console.error('Export failed: ', error);
                    alert('Export failed. Please try again.');
                }
            });
        });
    </script>

    @endsection