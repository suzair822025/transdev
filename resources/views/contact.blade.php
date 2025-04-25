@extends('layouts.app')

@section('content')

<!-- Start Contact Us 
============================================= -->
<div class="contact-style-one-area overflow-hidden default-padding">

    <div class="contact-shape">
        <img src="{{ asset('assets/img/illustration/14.png') }}" alt="Image Not Found">
    </div>
    
    <div class="container">
        <div class="row align-center">

            <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-40">

                <div class="contact-style-one-info">
                    <h4 class="sub-title">Have Questions?</h4>
                    <h2>Contact Information</h2>
                    <p>
                        Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                    </p>
                    <ul>
                        <li class="wow fadeInUp">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Hotline</h5>
                                <a href="">(254) 271-4094</a>
                            </div>
                        </li>

                        <li class="wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="info">
                                <h5 class="title">Official Email</h5>
                                <a href="mailto:sales@translationwindows.com">sales@translationwindows.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                <div class="contact-form-style-one">
                    <h2 class="heading">Send us a Massage</h2>
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                    <form id="hero-reg-form" action="{{route('svcontact')}}" method="POST">
                        @csrf
                        <div class="row tp-gx-10">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Your Name*" class="form-control" id="validationCustom02" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email Address*" class="form-control" id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone Number" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Enter Your Message here" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tp-contact-btn mt-10">
                                <button type="submit" class="reg-tp-btn" name="submitHeroReg"><i class="fa fa-paper-plane"></i> Get in Touch</button>
                            </div>
                        </div>
                        </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Start Map 
============================================= -->
<div class="maps-area bg-gray overflow-hidden">
    <img src="{{ asset('assets/img/gmap.avif') }}" alt="" class="img-fluid">
</div>
<!-- End Map -->

<!--========== END PAGE LAYOUT ==========-->

@endsection

@section('scripts')
<script src="{{asset("/assets/js/bootstrap-formavalidation.js")}}"></script>
<script src="{{asset("/assets/js/validation-forms.js")}}"></script>
@endsection