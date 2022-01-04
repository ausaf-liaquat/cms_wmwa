<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') {{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="{{ asset('assets/css/sidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="https://www.westmerciawomensaid.org/wp-content/themes/Divi/style.css?ver=5.8.2"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.4/sweetalert2.min.css"
        integrity="sha512-iuMkf48pM/TdH5DQkNPLWPLIUsVCncQEpuxgcMq/oDmJepdFcu48Wy4MwXggN9WFb4L6rpXQf5YJE/+OXkM1Lw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="icon" href="https://www.westmerciawomensaid.org/wp-content/uploads/2019/12/WMWA-150x150.png"
        sizes="32x32" />
    <style>
        #workbook_form fieldset:not(:first-of-type) {
            display: none;
        }

        .tab {
            display: none;
        }

        .swal2-container {
            z-index: {
                X
            }

            ;
        }

        .spinner {
            margin: 5px auto 5px;
            width: 70px;
            text-align: center;
            display: none;
        }

        .spinner>div {
            width: 18px;
            height: 18px;
            background-color: #6e659e;

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0)
            }

            40% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
        .error{
            color: red;
        }
    </style>
    @livewireStyles()
</head>

<body>
    <div class="d-flex crm-bkground">
        @include('User.partials.sidebar')
        <div class="w-100">
            <div class="container crm-container p-5">
                @yield('content')
            </div>
        </div>
    </div>

    @include('Practitioner.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Jquery JS-->
    <script src="{{ asset('assets/js/sidebars.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

    <script src="{{ asset('assets/js/tata.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.4/sweetalert2.all.min.js"
        integrity="sha512-niNQgNQ4mHtOdt//YjERRRbsmlc9aH+1c+fIQ9bQWD5kByzpE10EBDOhyV/n+anhaLW9GN4Dalu/z9QrXBvDUQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('assets/js/garlic.min.js')}}"></script>
        @livewireScripts()
    @yield('extrajs')
</body>

</html>
<!-- end document-->
