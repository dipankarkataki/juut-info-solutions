@extends('welcome')
@section('title', 'Software Testing')
@section('custom-style')
    <style>
        .service-thumbnail img {
            height: 600px !important;
            width: 100%;
            object-position: center;
            object-fit: cover;
        }

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
                            <img src="{{ asset('assets/images/service/bg-test.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Software Testing</h4>
                        <p class="disc">
                            Guaranteeing Reliable Software Performance Through Rigorous Testing. At our core, we prioritize
                            the reliability and performance of your software. Our comprehensive testing processes are
                            designed to identify and rectify issues, ensuring a seamless and smooth user experience.

                        </p>

                        <p class="disc">
                            Our Testing Approach:
                        </p>

                        <ul class="process-list">
                            <li>
                                Thorough Evaluation: We leave no stone unturned. Our testing processes involve a detailed
                                evaluation of your software, from functionality to user experience.
                            </li>
                            <li>
                                Issue Identification: We are meticulous in identifying any issues or glitches that may
                                impact the performance of your software.
                            </li>
                            <li>
                                Seamless User Experience: Our ultimate goal is to ensure that your users have a trouble-free
                                and enjoyable experience when using your software.
                            </li>
                        </ul>

                        <p class="disc">
                            Why Choose Us:
                        </p>

                        <ul class="process-list">
                            <li>
                                Expertise in comprehensive testing.
                            </li>
                            <li>
                                Meticulous issue identification and resolution.
                            </li>
                            <li>
                                Commitment to delivering a seamless user experience.
                            </li>
                            <li>
                                Focus on software reliability and performance.
                            </li>
                        </ul>
                        <p class="disc">
                            Your software deserves to be error-free and perform at its best. Let our testing processes
                            guarantee a smooth user experience. Contact us to learn more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
