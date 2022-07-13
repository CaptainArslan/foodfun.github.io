<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body>
    @section('body-content');
    @show
<!-- test -->
    <!-- Javascript -->
    <script src="{{asset('/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{asset('/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{asset('/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>