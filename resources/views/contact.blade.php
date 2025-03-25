@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset("/assets/img/1920x1080/01.jpg") }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Contact</h1>
        <p class="white-text">How to get in touch – Contact & Feedback….</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

@if(Session::has('successMessage'))
<div class="alert alert-success alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Success!</strong> {{ Session::get('successMessage') }}
</div>
@endif

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container space20px">
        <p class="d-inline">Do you need a quote or have specific requirements for your translation project? Do you have a question about a current project or would you like to give us some feedback? <br><h2 class="h3-small d-inline"><strong>We are available 24/7 on weekdays. Email enquiries will usually be answered within 60 minutes.</h2></strong></p>

        <section id="contact" class="container my-5">
            <form action="{{ url('contact-us') }}" method="post" id="contactForm">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h3 class="h3-label"><label for="YourName">Your name</label></h3>
                            <input type="text" name="name" class="form-control" id="YourName" placeholder="Enter Full Name">
                            <p class="help-block with-errors"></p>
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <h3 class="h3-label"><label for="YourEmail">Email Address</label></h3>
                            <!-- <input type="email" name="email" class="form-control" id="YourEmail" placeholder="Enter Email Address"> -->
                            <input type="email" name="email" class="form-control" id="YourEmail" placeholder="Enter Email Address">
                            <p class="help-block with-errors"></p>
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="form-group">
                            <h3 class="h3-label"><label for="YourPhone">Subject</label></h3>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Subject">
                            <p class="help-block with-errors"></p>
                            <p class="text-danger">{{ $errors->first('subject') }}</p>
                        </div>
                        <div class="form-group">
                            <h3 class="h3-label"><label for="YourPhone">Contact No.</label></h3>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Contact No.">
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                        </div>
                        <div class="form-group">
                            <h3 class="h3-label"><label for="YourEmail">Address</label></h3>
                            <p>A-10 Zohra Plaza, 3rd Floor, Block 13C, Glushan-e-Iqbal <br> Karachi
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h3 class="h3-label"><label for="message">Message</label></h3>
                            <textarea name="message" class="form-control message" id="message" placeholder="Enter Your Message"></textarea>
                            <p class="text-danger">{{ $errors->first('message') }}</p>
                        </div>
                        <div clsss="row">
                            <button type="submit" class="btn-theme btn-theme-sm text-uppercase submit" name="submitButton">Send</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="successMsg" class="lert alert-success" style="display: none;">
                            Your form has been successfully submitted
                        </div>
                    </div>
                </div>
            </form>
        </section>

    </div>
</div>
<!-- End Contact List -->


<!--========== END PAGE LAYOUT ==========-->

@endsection

@section('scripts')
<script src="{{asset("/assets/js/bootstrap-formavalidation.js")}}"></script>
<script src="{{asset("/assets/js/validation-forms.js")}}"></script>
@endsection