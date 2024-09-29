@extends('layouts/master')

@section('body')

<div class="container form-container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <div class="form-group">
                <label for="search-input" class="form-label">Search Contacts by Name</label>
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control" placeholder="Enter contact name..." autocomplete="off">
                </div>
                <ul id="suggestions" class="list-unstyled mt-1"></ul>
            </div>
        </div>
    </div>
</div>

<!-- Custom styling for mobile and desktop responsiveness -->
<style>
    /* Ensure suggestions stay visible and well-positioned */
    #suggestions {
        position: absolute;
        width: 100%;
        z-index: 1000;
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        max-height: 250px;
        /* Set a max height for scroll */
        overflow-y: auto;
    }

    #suggestions li {
        padding: 10px;
        cursor: pointer;
    }

    #suggestions li:hover {
        background-color: #f1f1f1;
    }

    /* Style the links inside the suggestion list */
    #suggestions li a {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    #suggestions li a:hover {
        color: #007bff;
        /* Change color on hover */
    }

    /* Media query for smaller screens */
    @media (max-width: 576px) {
        #search-input {
            font-size: 1rem;
            /* Adjust font size for mobile */
        }

        #suggestions li {
            font-size: 0.9rem;
            /* Smaller font for suggestion items on mobile */
        }
    }
</style>

<script>
    $(document).ready(function() {
        $('#search-input').on('keypress keydown keyup', function() {
            var query = $('#search-input').val();

            // If query length is greater than 3, trigger search
            if (query.length > 2) {
                $.ajax({
                    url: "{{ config('constants.API_URL') }}search-contacts",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        console.log(data);
                        $('#suggestions').empty();
                        if (data.length > 0) {
                            $.each(data, function(index, contact) {
                                $('#suggestions').append('<li> <a href="retailer-detail?contact_guid=' + contact.guid + '">' + contact.contact_name + '</a></li>');
                            });
                        } else {
                            $('#suggestions').append('<li>No contacts found</li>');
                        }
                    }
                });
            } else {
                $('#suggestions').empty(); // Clear the suggestion list if query is less than 4
            }
        });
    });
</script>

@endsection