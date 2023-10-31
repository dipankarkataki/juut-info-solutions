@extends('welcome')
@section('title', 'Contact Us')
@section('custom-style')
    <style>
        .toast{
            font-size:18px;
        }
    </style>
@endsection
@section('content')

    <!-- conact us form fluid start -->
    <div class="rts-contact-form-area" style="margin-top:130px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                                Get In Touch
                            </p>
                            <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form  action="{{route('contact.send-email')}}" method="post">
                                @csrf
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <input type="text" name="inquiry_for" placeholder="Inquiry For" required>
                                <textarea placeholder="Type Your Message" name="message" required></textarea>
                                <button type="submit" class="rts-btn btn-primary" onclick="this.innerHTML = 'Sending....Please Wait.';">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- conact us form fluid end -->
@endsection

@section('custom-scripts')
    <script>

        @if (session('success'))
            toastr.success('{{ session('success') }}', '', {
                positionClass: 'toast-top-right',
                timeOut: 3000 
            });
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}', '', {
                positionClass: 'toast-top-right',
                timeOut: 3000 
            });
        @endif
    </script>
@endsection