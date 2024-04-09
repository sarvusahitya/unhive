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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <!-- jQuery Validate -->
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Adjust form width for mobile */
        @media (max-width: 576px) {
            .form-container {
                padding: 0 15px;
            }
        }

        .input-with-icon {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>');
            background-repeat: no-repeat;
            background-position: 10px center;
            padding-left: 35px;
            /* Adjust based on the size of the icon */
        }
    </style>
</head>

</style>
</head>

<body>
    <div class="container form-container">
        <div class="row">
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

                    <input type="text" class="form-control input-with-icon " id="storeAddress" name="storeAddress" required placeholder="Location">
                </div>
                <div class="row">


                    <div class="form-group col-lg-4 ">
                        <label for="state">State / Province</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="form-group col-lg-4 ">

                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="zip">ZIP / Postal code</label>
                        <input type="text" class="form-control" id="zip" name="zip" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
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