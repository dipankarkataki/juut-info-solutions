@extends('welcome')
@section('title', 'Graphic Design')
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
                            <img src="{{ asset('assets/images/service/bg-graphics.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Graphic Design</h4>
                        <p class="disc">
                            Elevate Your Brand with Stunning Graphic Design. Our graphic design services encompass a wide
                            range, from crafting captivating logos and branding materials to designing compelling marketing
                            collateral. We specialize in creating eye-catching visuals that not only capture attention but
                            also leave an indelible impression.

                        </p>

                        <p class="disc">
                            Our Graphic Design Approach:
                        </p>

                        <ul class="process-list">
                            <li>
                                Comprehensive Expertise: We provide a full spectrum of graphic design services, ensuring
                                that your brand maintains a consistent and professional appearance across various media.
                            </li>
                            <li>
                                Visual Excellence: Our designers bring a combination of creativity and design finesse to the
                                table, ensuring that your visuals are not only aesthetically pleasing but also effectively
                                convey your brand's message.
                            </li>
                            <li>
                                Memorable Impact: We recognize the importance of making a memorable impact on your audience,
                                and our designs are strategically crafted to achieve just that.
                            </li>
                        </ul>

                        <p class="disc">
                            Why Choose Us:
                        </p>

                        <ul class="process-list">
                            <li>
                                Proficiency in a wide array of graphic design services.
                            </li>
                            <li>
                                Attention-grabbing and impactful visuals.
                            </li>
                            <li>
                                Dedication to leaving a lasting mark on your audience.
                            </li>
                            <li>
                                A focus on enhancing your brand's visual identity.
                            </li>
                        </ul>
                        <p class="disc">
                            Your brand deserves visuals that stand out and make a lasting impression. Let our graphic design
                            services elevate your brand to the next level. Contact us to initiate the transformation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection
