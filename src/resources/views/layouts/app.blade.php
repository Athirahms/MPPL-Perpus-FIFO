<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Perpustakaan Unggul - Baca Buku Gratis')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="{{ asset('front/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('front/icomoon/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/stellar-nav.css') }}">

    @stack('styles')
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    @include('front.partials.header')

    <main>
        @yield('content')
    </main>

    @include('front.partials.footer')

    <script src="{{ asset('front/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('front/js/stellar-nav.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="{{ asset('front/js/plugins.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>

    @stack('scripts')
</body>

</html>