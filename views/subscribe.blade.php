@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset("/assets/img/1920x1080/01.jpg")}}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Subscribe  for promotions and discount coupons </h1>
        <p class="white-text">&nbsp;</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<div class="section-seperator">
    <div class="content-lg container space20px">
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
        
        <form action="{{ url('subscribe') }}" method="post" id="subscribeForm">
            {{ csrf_field() }}
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="YourName">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter Email" maxlength="100" />
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="YourMessage">Notification Type</label>
                            <div class="clearfix"></div>
                            <div class="radio-inline">
                                <label class="font-lightweight"><input type="radio" name="notification_type" value="Instant" {{ (old('notification_type') == 'Instant') ? 'checked' : '' }} checked>Instant</label>
                            </div>
                            <div class="radio-inline">
                                <label class="font-lightweight"><input type="radio" name="notification_type" value="Daily" {{ (old('notification_type') == 'Daily') ? 'checked' : '' }}>Daily</label>
                            </div>
                            <div class="radio-inline">
                                <label class="font-lightweight"><input type="radio" name="notification_type" value="Weekly" {{ (old('notification_type') == 'Weekly') ? 'checked' : '' }}>Weekly</label>
                            </div>
                            <div class="radio-inline">
                                <label class="font-lightweight"><input type="radio" name="notification_type" value="Monthly" {{ (old('notification_type') == 'Monthly') ? 'checked' : '' }}>Monthly</label>
                            </div>
                            <div id="alertNotifytypeMessage"></div>
                            <p class="text-danger">{{ $errors->first('notification_type') }}</p>
                        </div>
                    </div>
                </div>
                
                <div clsss="row">
                    <button type="submit" class="bbtn-theme btn-theme-sm text-uppercase submit pull-left"><i class="fa fa-paper-plane" aria-hidden="true"></i>Subscribe</button>
                </div>
                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            </div>
        </form>
    </div>
</div>

<!--========== END PAGE LAYOUT ==========-->
@endsection

@section('scripts')
<script src="{{ asset('/assets/js/bootstrap-formavalidation.js') }}"></script>
<!-- <script src="{{ asset('/assets/js/dropzone.js') }}" type="text/javascript"></script> -->
<script src="{{ asset('/assets/js/validation-forms.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.js') }}"></script>
@endsection