<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Coupon')</title>
    {{--Bootstrap-css--}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}">
    {{--Theme-css--}}
    <link rel="stylesheet" href="{{ asset('css/theme-admin.css') }}">
    {{--Font-Icon--}}
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
</head>
<body>
{{--Side-bar--}}
<div class="col-md-2 menu-sidebar">
    {{--Menu-Side-bar--}}
    @include('Admin1.menu-sidebar')
    {{--End-Menu-Side-bar--}}
    @include('')
</div>

{{--Bootstrap-js--}}
<script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
{{----}}
</body>
</html>