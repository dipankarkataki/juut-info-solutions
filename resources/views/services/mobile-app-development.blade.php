@extends('welcome')
@section('title', 'Mobile App Development')
@section('custom-style')
    <style>

        .process-list li {
            list-style-type: lower-alpha;
        }
    </style>
@endsection
@section('content')
    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap" style="margin-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <div class="thumbnail service-thumbnail">
                            <img src="{{ asset('assets/images/service/bg-mobile.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Mobile App Development</h4>
                        <p class="disc">
                            Transform Your Vision into Reality with Our Mobile App Development Services. Our seasoned mobile
                            app development team specializes in creating user-friendly and feature-rich applications for
                            both iOS and Android platforms. We offer end-to-end services, from conceptualization to app
                            launch.

                        </p>

                        <p class="disc">
                            In today's digital landscape, mobile applications have become indispensable tools for engaging
                            users and expanding your brand's reach. Whether you're targeting the iOS or Android platform,
                            our expert team is dedicated to crafting applications that meet your specific needs.

                            Our Process:
                        </p>

                        <p class="disc">
                            Our Process:
                        </p>

                        <ul class="process-list">
                            <li>
                                Concept to Reality: We work closely with you to understand your vision and objectives,
                                ensuring that your ideas are not only viable but optimized for the mobile ecosystem.
                            </li>
                            <li>
                                Design and Development: Our team utilizes cutting-edge design principles to create intuitive
                                and visually appealing interfaces, and our developers bring these designs to life, crafting
                                high-performance applications.
                            </li>
                            <li>
                                Testing and Quality Assurance: Your app undergoes rigorous testing to identify and resolve
                                any issues, ensuring seamless performance across various devices and screen sizes.
                            </li>
                            <li>
                                Launch and Ongoing Support: We provide assistance during the launch process and can even
                                help with app store optimization. Post-launch, we offer ongoing support and maintenance to
                                keep your app up-to-date and responsive to user feedback.
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="service-detials-step-2 mt--40">
                        <h4 class="title">3 Simple Steps to Process</h4>
                        <p class="disc mb--25">
                            Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is
                            maintain solve wireless scenarios after intermandated applications. Conveniently predominate
                            busin revolutionary quality vectors through future-proof manufactured products.
                            Enthusiastically transform distinctive collaboration.
                        </p>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            predominate misslat revolutionary quality vectors through future-proof manufactured
                            products.
                        </p>
                        <!-- stem-area start -->
                        <div class="row  mb--40 g-5 mb_md--20 mb_sm--20">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">01</p>
                                    <h6 class="title">
                                        STEP ONE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">02</p>
                                    <h6 class="title">
                                        STEP TWO
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">03</p>
                                    <h6 class="title">
                                        STEP THREE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            Conveniently predominate revolutionary quality vectors through future-proof manufactured
                            products. Objectively envisioneer high in convergence through collaborative networks.
                            Interactively generate B2C tailers for business data restore fully researched relationships
                            through
                        </p>
                        <!-- stem-area End -->
                    </div>
                    <!-- service details left area end -->
                    <div class="service-detials-step-3 mt--70 mt_md--50">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="thumbnail sm-thumb-service">
                                    <img src="{{ asset('assets/images/service/sm-01.jpg') }}" alt="Service">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                                <h4 class="title">Customer Benefits</h4>
                                <p class="disc">Catalysts for change before fully tested markets are maintain wireless
                                    scenarios after intermandated applications predominate revolutionary.</p>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We use the latest diagnostic equipment</span>
                                </div>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We are a member of Professional Service</span>
                                </div>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>Automotive service our clients receive</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--rts blog wizered area -->
                {{-- <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service">
                        <div class="wized-header">
                            <h5 class="title">
                                Categories
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Strategy Growth <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Finance Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Investment Policy <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Tax Managment <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized download service">
                        <div class="wized-header">
                            <h5 class="title">Download</h5>
                        </div>
                        <div class="wized-body">
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="assets/images/service/icon/07.svg" alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        Our Brochures
                                    </h6>
                                    <span>Downlaod</span>
                                </div>
                                <a class=" rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                            <!-- single downlaod area End -->
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="assets/images/service/icon/08.svg" alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        Company Details
                                    </h6>
                                    <span>Downlaod</span>
                                </div>
                                <a class=" rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                            <!-- single downlaod area End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized contact service">
                        <div class="wized-header">
                            <a href="#"><img src="assets/images/logo/logo-2.svg" alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary" href="#">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div> --}}
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
