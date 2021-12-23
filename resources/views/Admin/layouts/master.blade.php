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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.4/sweetalert2.min.css"
        integrity="sha512-iuMkf48pM/TdH5DQkNPLWPLIUsVCncQEpuxgcMq/oDmJepdFcu48Wy4MwXggN9WFb4L6rpXQf5YJE/+OXkM1Lw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .swal2-container {
  z-index: {X};
}
        </style>
</head>

<body>
    <div class="d-flex crm-bkground">
        @include('Admin.partials.sidebar')
        <div class="w-100">
            <div class="container crm-container p-5">
                @yield('content')
            </div>
        </div>
    </div>

   @include('Admin.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Jquery JS-->
    <script src="{{ asset('assets/js/sidebars.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.4/sweetalert2.all.min.js"
    integrity="sha512-niNQgNQ4mHtOdt//YjERRRbsmlc9aH+1c+fIQ9bQWD5kByzpE10EBDOhyV/n+anhaLW9GN4Dalu/z9QrXBvDUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('extrajs')
</body>

</html>
<!-- end document-->
