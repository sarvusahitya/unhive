<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETAILERS ON-BOARDING PROCESS</title>


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
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css
" rel="stylesheet">

    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js
"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
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

        .input-with-icon {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>');
            background-repeat: no-repeat;
            background-position: 10px center;
            padding-left: 35px;
            opacity: 8 0%;
            /* Adjust based on the size of the icon */
        }

        .heading {
            border-radius: 5px;
            font-size: medium;
        }

        label.error {
            background: #c30e0e;
            font-size: 10px;
            color: white;
            padding: 0px 8px;
            position: absolute;
            line-height: 1.5;
        }



        .loader {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: fixed;
            width: 100%;
            z-index: 1000000000;
            background: rgba(0, 0, 0, 0.7);
        }

        .ring {
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            animation: ring 4s linear infinite;
        }

        @keyframes ring {
            0% {
                transform: rotate(0deg);
                box-shadow: 1px 3px 2px #7367F0;
            }

            50% {
                transform: rotate(180deg);
                box-shadow: 1px 3px 2px #7367F0;
            }

            100% {
                transform: rotate(0360deg);
                box-shadow: 1px 3px 2px #7367F0;
            }
        }

        .ring::before {
            position: absolute;
            left: 0;
            content: "";
            top: 0;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
        }

        .loader span {
            display: none;
            color: #ff962a;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 200px;
            animation: text 3s ease-in-out infinite;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="{{URL::asset('resources')}}/js/customscript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.6/css/intlTelInput.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/utils.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>