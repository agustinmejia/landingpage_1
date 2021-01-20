<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>{{ setting('site.title') }} | Bienvenido</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">


        <!-- Favicons -->
        @php
            $site_logo = setting('site.logo') ? asset('storage/'.setting('site.logo')) : asset('landingpage/img/apple-touch-icon.png');
        @endphp
        <link href="{{ $site_logo }}" rel="icon">
        <link href="{{ $site_logo }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('landingpage/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet">

    </head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')

    </div> <!-- .site-wrap -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landingpage/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landingpage/js/main.js') }}"></script>

    <script>
        $(document).ready(function(){
            
        });
    </script>

</body>

</html>
