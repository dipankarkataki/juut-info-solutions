@extends('welcome')
@section('title', 'Home')
@section('custom-style')
    <style>
        .single-experience-ten-list p.disc {
            max-width: 100% !important;
            text-align: center;
        }

        .inner p.disc {
            text-align: justify;
            padding: 15px;
        }

        .rts-client-reviews-h2 .review-body p.disc {
            border-bottom: 0px;
        }
        .rts-client-reviews-h2 .review-body p.disc {
            font-size: 14.5px;
            text-align: justify
        }
        .rts-client-reviews-h2 {
            padding: 25px 25px 0px 25px;
            border:0px;
        }
    </style>
@endsection
@section('content')
    

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
    {{-- @include('our-clients.our-clients') --}}
    <!-- client area start -->

    <!-- testimonials area start -->
    @include('testimonial.testimonial')
    <!-- testimonials area end -->


    <!-- start header area -->
@endsection