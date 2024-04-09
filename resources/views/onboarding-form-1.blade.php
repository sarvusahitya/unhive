<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="" />
    <meta name="author" content="Uhive">
    <meta name="thumbnail" content="{{URL::asset('resources')}}/assets/images/logo/logo.png" />
    <meta property="og:locale" content="en-in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RETAILERS ON-BOARDING PROCESS | By continuing you will be filling a form that will onboard you as a retailer to our supply chain network for all telecom and IT products in Karnataka" />
    <meta property="og:description" content="RETAILERS ON-BOARDING PROCESS" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{URL::asset('resources')}}/assets/images/logo/logo.png" />
    <meta property="og:site_name" content="Uhive" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="RETAILERS ON-BOARDING PROCESS" />
    <meta name="twitter:title" content=" RETAILERS ON-BOARDING PROCESS | By continuing you will be filling a form that will onboard you as a retailer to our supply chain network for all telecom and IT products in Karnataka" />
    <meta name="twitter:image" content="{{URL::asset('resources')}}/assets/images/logo/logo.png" />
    <meta name="twitter:site" content="@prestigegroup" />

    <meta name="twitter:creator" content="@prestigegroup" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('resources')}}/assets/images/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{URL::asset('resources')}}/assets/images/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('resources')}}/assets/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('resources')}}/assets/images/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('resources')}}/assets/images/ico/favicon-16x16.png">
    <link rel="manifest" href="{{URL::asset('resources')}}/assets/images/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <!-- jQuery Validate -->
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }

        /* Adjust form width for mobile */
        /* @media (max-width: 576px) {
            .form-container {
                padding: 0 15px;
            }
        } */
    </style>
</head>

<body>
    <div class="container form-container">
        <div class="row">
            <div class="col-lg-6">
                <form id="storeForm">
                    <h2 class="mb-4">Store Details:</h2>
                    <div class="form-group">
                        <label for="storeName">What is the name of your Retail Store?</label>
                        <input type="text" class="form-control" id="storeName" name="storeName" required>
                    </div>
                    <div class="form-group">
                        <label for="gstNumber">GST Number?</label>
                        <input type="text" class="form-control" id="gstNumber" name="gstNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="multipleLocations">Do you have multiple locations?</label>
                        <select class="form-control" id="multipleLocations" name="multipleLocations">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="storeAddress">Store Address</label>
                        <input type="text" class="form-control" id="storeAddress" name="storeAddress" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-4">
                                <label for="state">State / Province</label>
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zip">ZIP / Postal code</label>
                            <input type="text" class="form-control" id="zip" name="zip" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#storeForm').validate({
                rules: {
                    storeName: {
                        required: true
                    },
                    gstNumber: {
                        required: true
                    },
                    storeAddress: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    zip: {
                        required: true
                    }
                },
                messages: {
                    storeName: {
                        required: "Please enter the name of your Retail Store"
                    },
                    gstNumber: {
                        required: "Please enter your GST Number"
                    },
                    storeAddress: {
                        required: "Please enter your store address"
                    },
                    city: {
                        required: "Please enter your city"
                    },
                    state: {
                        required: "Please enter your state/province"
                    },
                    zip: {
                        required: "Please enter your ZIP/postal code"
                    }
                },
                submitHandler: function(form) {
                    // Handle form submission here
                }
            });
        });
    </script>
</body>

</html>