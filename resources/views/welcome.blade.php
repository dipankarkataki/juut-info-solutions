<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juut Info Systems</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/logo/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/logo/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/logo/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/logo/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/images/logo/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets/images/logo/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets/images/logo/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets/images/logo/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/images/logo/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/images/logo/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/logo/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets/images/logo/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/logo/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/logo/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/logo/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .single-experience-ten-list p.disc {
            max-width: 100% !important;
            text-align: center;
        }

        .inner p.disc {
            text-align: justify;
            padding: 15px;
        }
    </style>
</head>

<body class="home-blue home-ten">
    <!-- start header area -->
    @include('header.header')

    @include('sidebar.sidebar')
    <!-- ENd Header Area -->


    <!-- banner ten area start -->
    @include('banner.banner')
    <!-- banner ten area end -->


    <!-- About Us -->

    @include('about-us.about-us')

    <!-- End About Us -->


    <!-- awesome startupo service area start -->
    @include('startup-service.startup-service')
    <!-- awesome startupo service area end -->



    <!-- Get free consultancy start -->
    @include('consultancy.consultancy')
    <!-- Get free consultancy end -->

    <!-- what sets us apart start -->
    @include('what-sets-us-apart.what-sets-us-apart')
    <!-- what sets us apart end -->

    <!-- Our Mission start -->
    @include('our-mission.our-mission')
    <!-- Our Mission Ends -->


    <!-- rts team area ten start -->
    {{-- @include('our-team.our-team') --}}
    <!-- rts team area ten end -->

    <!-- client area start -->
    @include('our-clients.our-clients')
    <!-- client area start -->

    <!-- testimonials area start -->
    @include('testimonial.testimonial')
    <!-- testimonials area end -->


    <!-- start header area -->
    <!-- footer area start -->
    @include('footer.footer')
    <!-- footer area end -->

    <!-- copyright-area start -->
    @include('copyright.copyright')
    <!-- copyright-area end -->
    <!-- ENd Header Area -->


    <!-- start loader -->
    @include('loader.loader')
    <!-- End loader -->

    <!-- progress Back to top -->
    @include('progress-bar.progress-bar')
    <!-- progress Back to top End -->


    <!-- scripts start form hear -->
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sal.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>

    <!-- main Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- scripts end form hear -->
</body>

</html>
