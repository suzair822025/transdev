@extends('layouts.app')

@section('style')
<link href="{{ asset('/assets/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/basic.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/01.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Careers</h1>
        <p class="white-text">&nbsp;</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<div class="section-seperator">
    <div class="content-lg container space20px">
        <p><strong> Join Leebon</strong></p>
        <p>Whether you have years of translation/transcription services experience or are just starting your career, we’ll help you realize your full potential and achieve your career goals. We’ll help you become the best you can be, because a better you means a better us..</p>
        <p><strong>Our People</strong></p>
        <p>Our people are our biggest asset. We empower and develop our people and help them fulfill their potential by providing them with an enabling working environment and cutting edge learning opportunities. We believe that investing in our human capital will help us achieve and exceed our business goals.
            We not only offer job opportunities- we offer careers.
		</p>
		<p><strong>Diversity & Inclusion</strong></p>
		<p>When you join Leebon, you’ll be part of a culture built on respect – one that recognizes the unique talents of everyone on the team.</p>
		
        <div class="clearfix"></div>

        @if (Session::has('response'))
            @if (Session::get('response.code') == 200)
                <div class="alert col-sm-offset-3 col-sm-6 col-md-6 alert-info" style="text-align: center; font-size: 17px;">
                    {{Session::get('response.message')}}
                </div>
            @endif

            @if (Session::get('response.code') == 400)
                <div class="alert col-sm-offset-3 col-sm-6 col-md-6 alert-danger" style="text-align: center; font-size: 17px;">
                    {{Session::get('response.message')}}
                </div>
            @endif
        @endif
		
        <form action="{{ url('careers_add') }}" method="POST" id="careersForm" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="YourName">Name</label>
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Full Name">
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="YourEmail">Email</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email Address">
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    </div>
                </div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
        			<div class="form-group">
                        <label for="YourEmail">Phone</label>
                        <input type="tell" class="form-control" id="phone" name="phone" placeholder="Enter Phone" onkeypress="javascript:return isNumber(event)">
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                	</div>
        		</div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="YourLanguage">Native Language</label>
                        <input type="text" class="form-control" id="native-language" name="native_language" placeholder="Enter Native Language">
                        <p class="text-danger">{{ $errors->first('native_language') }}</p>
                    </div>
                </div>
        	</div>

            <div class="row">
                <div class="col-md-4">
                    <label for="YourEmail" class="mb-4">Skills</label>
                    <div class="clearfix"></div>
                    <div class="checkbox-inline">
                        <label class="font-lightweight">
                            <input type="checkbox" name="skills[]" value="Audio/Video Translation"> Audio/Video Translation
                        </label>
                    </div>
                    <div class="checkbox-inline">
                        <label class="font-lightweight">
                            <input type="checkbox" name="skills[]" value="Document Translation"> Document Translation
                        </label>
                    </div>
                    <div class="checkbox-inline pl-3">
                        <label class="font-lightweight">
                            <input type="checkbox" name="skills[]" value="Transcription"> Transcription
                        </label>
                    </div>
                </div>
            </div>

        	<div class="row">
        		<div class="col-md-4">
	        		<div class="form-group">
	            		<input type="file" id="docUpload" name="careerFile" style="visibility: hidden; position: absolute;" />
                        <button class="btn-theme btn-theme-sm text-uppercase" id="OpendocUpload">Upload Resume</button>
                        <br>
                        <span id="fileName"></span>
                        <p class="text-danger">{{ $errors->first('careerFile') }}</p>
	            	</div>
            	</div>
            	<div class="col-md-4">
        			<div clsss="row">

                        <button type="submit" id="careersForm_submit" class="btn-theme btn-theme-sm text-uppercase submit pull-right" id=""><i class="fa fa-paper-plane" aria-hidden="true" style="color: #fff"></i>Submit</button>
                    </div>
            	</div>
        	</div>

        </form>
    </div>
</div>

<!--========== END PAGE LAYOUT ==========-->
@endsection

@section('scripts')
<script src="{{ asset('/assets/js/bootstrap-formavalidation.js') }}"></script>
<script src="{{ asset('/assets/js/validation-forms.js') }}"></script>
<!-- <script src="{{ asset('/assets/js/dropzone.js') }}" type="text/javascript"></script> -->
<script src="{{ asset('/assets/js/scripts.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#docUpload").change(function(e){
            fileName = this.files[0].name;
            $("#fileName").html(fileName);
        });
    });
    // Validating Phone Field so it accepts numbers only.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;
        return true;
    }    
</script>
@endsection