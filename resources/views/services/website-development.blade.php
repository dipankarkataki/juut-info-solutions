@extends('welcome')
@section('title', 'Website Development')
@section('custom-style')
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
                            <img src="{{ asset('assets/images/service/bg-new.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Website Development</h4>
                        <p class="disc">
                            Our website development services are meticulously crafted to help your brand establish a
                            commanding online presence. We specialize in creating websites that are not just visually
                            appealing but also user-friendly and fully responsive to all devices. These websites are more
                            than just an online presence; they are powerful tools designed to captivate your audience and
                            drive tangible results.

                        </p>

                        <p class="disc">
                            In the fast-paced digital landscape of today, having a strong online presence is a business
                            imperative. Your website is often the initial point of interaction with potential customers, and
                            it must make a lasting impact. This is where we come in – our expert web development team is
                            committed to not just meeting but exceeding your expectations.

                            Our responsive website design ensures that your online platform adapts seamlessly to various
                            screen sizes, providing an exceptional user experience and contributing to higher search engine
                            rankings. The user-friendliness and visual appeal of our websites are carefully designed to
                            engage your audience and leave a memorable impression.

                            At the core of our web development philosophy is the aim to achieve measurable results for your
                            business. Whether it's enhancing lead generation, boosting online sales, or expanding your
                            brand's reach, our websites are tailored to help you reach your specific objectives.

                            In summary, our website development services empower your brand's online presence. We blend
                            creativity, technology, and strategy to create websites that stand out in the digital landscape,
                            ensuring your business's success. Contact us today to start your journey toward a robust online
                            presence and increased business prosperity."

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
