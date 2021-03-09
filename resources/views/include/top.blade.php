
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from templates.hibootstrap.com/ezir/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 15:12:08 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        

    <title>{{ config('app.name | '.$pages, 'Vehicle Inspection and Maintenance Care | '.$pages) }}</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <style>
        .brand-item > img{
            border-radius: 20px;
        }
        .disp-0{
            display: none !important;
        }
    </style>

</head>

<body>