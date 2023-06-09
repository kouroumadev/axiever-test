<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/vendors/images/favicon-16x16.png') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/src/plugins/jquery-steps/jquery.steps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/style.css') }}">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.4/b-2.2.2/r-2.2.9/sc-2.0.5/sp-1.4.0/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.4/b-2.2.2/r-2.2.9/sc-2.0.5/sp-1.4.0/datatables.min.js"></script>





    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="{{ asset('theme/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/dashboard.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/jquery-steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/steps-setting.js') }}"></script>


    <script src="{{ asset('theme/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('theme/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('theme/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('theme/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('theme/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('theme/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
	<script src="{{ asset('theme/src/plugins/datatables/js/vfs_fonts.js') }}"></script>




    <script src="{{ asset('theme/vendors/scripts/datatable-setting.js') }}"></script>
</body>

</html>
