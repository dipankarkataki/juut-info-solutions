@extends('welcome')
@section('title', 'Software Development')
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
                            <img src="{{ asset('assets/images/service/bg-soft.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Software Development</h4>
                        <p class="disc">
                            Unlock the Potential of Your Ideas with Our Software Development Expertise. Our seasoned team
                            covers a wide spectrum of applications, from business software to cutting-edge solutions. We
                            specialize in turning your concepts into robust, scalable, and highly efficient software
                            products.

                        </p>

                        <p class="disc">
                            Our Approach:
                        </p>

                        <ul class="process-list">
                            <li>
                                Comprehensive Solutions: We have the expertise to develop a wide variety of applications,
                                meeting diverse business needs. Whether it's streamlining your operations, enhancing user
                                experiences, or creating innovative solutions, we've got you covered.
                            </li>
                            <li>
                                Idea to Reality: We work closely with you to understand your vision and goals, ensuring that
                                your ideas are not just turned into software but into powerful, results-driven products.
                            </li>
                            <li>
                                Robust and Scalable: Our software solutions are built to be robust and scalable, ensuring
                                they can evolve with your business and handle growing demands.
                            </li>
                            <li>
                                Efficiency and Performance: We prioritize efficiency and performance, optimizing your
                                software to deliver the best user experiences and operational results.
                            </li>
                        </ul>

                        <p class="disc">
                            Why Choose Us:
                        </p>

                        <ul class="process-list">
                            <li>
                                Expertise across a broad spectrum of applications.
                            </li>
                            <li>
                                Tailored solutions that address your specific needs.
                            </li>
                            <li>
                                A commitment to quality and timely delivery.
                            </li>
                            <li>
                                A focus on creating software that empowers your business.
                            </li>
                        </ul>
                        <p class="disc">
                            Your business deserves software that not only meets your needs but also drives growth and
                            efficiency. Let's bring your ideas to life with robust, scalable, and efficient software
                            products. Contact us to get started today.
                        </p>
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
