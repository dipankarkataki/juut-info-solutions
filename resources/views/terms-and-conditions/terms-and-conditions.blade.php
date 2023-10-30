@extends('welcome')
@section('title', 'Terms & Conditions')
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

        .terms-title h5 {
            text-align: center;
            color: #525252;
            font-weight: 500;
            margin-top: 70px;
            margin-bottom: 55px;
        }

        .conditions-list ul li{
            list-style-type: disc;
        }
    </style>
@endsection
@section('content')
    <div class="banner-tena-area  rts-section-gap">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="terms-title mb-4">
                        <h5>TERMS & CONDITIONS</h5>
                    </div>
                    <hr>
                    <div class="conditions-list">
                        <ul>
                            <li>
                                <h6>Acceptance of Terms</h6>
                                <p>
                                    By using the services provided by Juut Info Systems herein after referred to as "the
                                    Company," you agree to be bound by the following Terms and Conditions. These Terms
                                    and Conditions constitute a legally binding agreement between you (the "Client") and
                                    the
                                    Company.
                                </p>
                            </li>
                            <li>
                                <h6>Scope of Services</h6>
                                <p>
                                    The Company offers a range of services, including but not limited to Website Design,
                                    Website Development, Software Development, UI/UX Design, Graphic Design, and
                                    Software Testing.
                                </p>
                            </li>
                            <li>
                                <h6>Project Engagement</h6>
                                <ul>
                                    <li>
                                        The Client agrees to provide clear project requirements, goals, and any
                                        necessary materials or assets in a timely manner to enable the Company to
                                        initiate and complete the project successfully.
                                    </li>
                                    <li>
                                        The Company will provide the Client with a project proposal, timeline, and cost
                                        estimate based on the project's scope. Once agreed upon, this becomes a binding
                                        agreement.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h6>Payment Terms</h6>
                                <ul>
                                    <li>
                                        The Client agrees to pay the Company according to the payment schedule outlined
                                        in the project proposal. Payment can be made via the specified payment methods.
                                    </li>
                                    <li>
                                        All payments are non-refundable.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h6>Changes and Revisions</h6>
                                <p>
                                    Any changes or revisions to the project's scope, objectives, or specifications must
                                    be mutually agreed upon in writing and may result in additional fees and time
                                    extensions.
                                </p>
                            </li>
                            <li>
                                <h6>Intellectual Property</h6>
                                <ul>
                                    <li>
                                        The Client retains ownership of any materials, data, or content provided to the
                                        Company.
                                    </li>
                                    <li>
                                        The Company retains ownership of all materials, code, designs, and intellectual
                                        property created for the project, unless otherwise agreed upon in writing.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h6>Confidentiality</h6>
                                <p>
                                    Both parties agree to keep all project-related information and materials
                                    confidential and not disclose them to third parties without written consent.
                                </p>
                            </li>
                            <li>
                                <h6>Termination</h6>
                                <ul>
                                    <li>
                                        Either party may terminate the project with written notice if the other party
                                        breaches any material term or condition of this agreement.
                                    </li>
                                    <li>
                                        In case of termination, the Client will be responsible for paying all fees due
                                        up to the date of termination.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h6>Warranty</h6>
                                <p>
                                    The Company provides a limited warranty for a specified period following project
                                    completion. The warranty covers any defects or errors in the work performed by the
                                    Company during this period.
                                </p>
                            </li>
                            <li>
                                <h6>Limitation of Liability</h6>
                                <p>
                                    The Company's liability for any damages, whether in contract, tort, or otherwise, is
                                    limited to the total fees paid by the Client.
                                </p>
                            </li>
                            <li>
                                <h6>Governing Law and Jurisdiction</h6>
                                <p>
                                    These Terms and Conditions shall be governed by and construed in accordance with the
                                    laws of Govt. Assam, India of the exclusive jurisdiction of the courts located in
                                    Guwahati, Assam (India).
                                </p>
                                <p>
                                    To the maximum extent permitted by law, the Company shall not be liable for any
                                    direct, indirect, incidental, special, consequential, or punitive damages, or any
                                    loss of profits or revenues, whether incurred directly or indirectly, arising out of
                                    the use or inability to use the software and services.
                                </p>
                            </li>
                            <li>
                                <h6>Software License</h6>
                                <ul>
                                    <li>The Company grants the Customer a non-exclusive, non-transferable, and revocable
                                        license to use the Company's software, subject to the terms and conditions of
                                        this Agreement.
                                    </li>
                                    <li>
                                        The Customer agrees not to decompile, reverse engineer, disassemble, or attempt
                                        to derive the source code of the software.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h6>Support and Maintenance</h6>
                                <p>
                                    The Company may provide support and maintenance services for the software as
                                    specified in the service level agreement or support plan, if applicable.
                                </p>
                            </li>
                            <li>
                                <h6>Privacy and Data Security</h6>
                                <p>
                                    The Company may collect and process personal and non-personal data as described in
                                    our Privacy Policy. By using our software and services, the Customer consents to
                                    such data collection and processing.
                                </p>
                            </li>
                            <li>
                                <h6>Restrictions</h6>
                                <p>
                                    You may not modify, distribute, reproduce, or reverse engineer our software. You may
                                    not use our software for any illegal or unauthorized purpose. You may not remove or
                                    obscure any copyright or other proprietary notice contained in our software.
                                </p>
                            </li>
                            <li>
                                <h6>Taxes</h6>
                                <p>
                                    Subscription and access to content services fall under the purview of Service Tax as
                                    per the current indirect taxation policy, Government of India. Taxes are applicable
                                    for consumption of content on the website and other products of Juut Info Systems
                                    uniformly for customers based in India and outside the country. Unless otherwise
                                    indicated, prices stated on our website/agreement are inclusive of applicable
                                    Service Tax, any applicable value added tax (VAT) or other sales taxes such as GST.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
