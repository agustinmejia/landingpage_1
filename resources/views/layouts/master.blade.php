<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        @yield('meta-datos')

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

        @php
            $background = setting('banner.principal') ? asset('storage/'.setting('banner.principal')) : url('landingpage/img/hero-bg.jpg')
        @endphp

        <style>
            .hero-section {
                background: linear-gradient(to right, rgba(32, 0, 1, 0.8) 0%, rgba(142, 2, 1, 0.8) 100%), url("{{ $background }}");
                position: relative;
            }
        </style>

        @yield('css')

    </head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v10.0" nonce="dgqk18Kz"></script>

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
    @yield('javascript')
</body>

</html>
