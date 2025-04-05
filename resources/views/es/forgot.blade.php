@extends('layouts.app')

@section('style')

<style type="text/css">
    .panel-login {
    border-color: #ccc;
    -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
    color: #00415d;
    background-color: #fff;
    border-color: #fff;
    text-align:center;
}
.panel-login>.panel-heading a{
    text-decoration: none;
    color: #666;
    font-weight: bold;
    font-size: 15px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
    color: #029f5b;
    font-size: 18px;
}
.panel-login>.panel-heading hr{
    margin-top: 10px;
    margin-bottom: 0px;
    clear: both;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
    height: 45px;
    border: 1px solid #ddd;
    font-size: 16px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
    outline:none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-color: #ccc;
}
.btn-login {
    background-color: #59B2E0;
    outline: none;
    color: #fff;
    font-size: 14px;
    height: auto;
    font-weight: normal;
    padding: 14px 0;
    text-transform: uppercase;
    border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
    color: #fff;
    background-color: #53A3CD;
    border-color: #53A3CD;
}
.forgot-password {
    text-decoration: underline;
    color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
    text-decoration: underline;
    color: #666;
}

.btn-register {
    background-color: #1CB94E;
    outline: none;
    color: #fff;
    font-size: 14px;
    height: auto;
    font-weight: normal;
    padding: 14px 0;
    text-transform: uppercase;
    border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
    color: #fff;
    background-color: #1CA347;
    border-color: #1CA347;
}
</style>
@endsection

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset("/assets/img/1920x1080/01.jpg") }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Forgot Password</h1>
        <p class="white-text">Please enter your email in case you forget your password...</p>
    </div>
</div>
<!--========== PARALLAX ==========-->
<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container space20px">

       <div class="row">

            <div class="col-md-6 col-md-offset-3">
                  @if(isset($danger)) 
                   <div class="alert alert-danger">
                       {{ $danger }}
                   </div>
                  @elseif(isset($success)) 
                   <div class="alert alert-success">
                       {{ $success }}
                   </div>
                  @endif 
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                FORGOT PASSWORD 
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="{{ url('forgotPassword') }}" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Enter your email here" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <center><input type="submit" name="submit" class="bbtn-theme btn-theme-sm text-uppercase submit" value="SUBMIT" style="width:200px;"></center>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                  <a href="{{ url('/')}}" tabindex="4" class="forgot-password">GO BACK</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact List -->


<!--========== END PAGE LAYOUT ==========-->

@endsection

@section('scripts')
<script src="{{asset("/assets/js/bootstrap-formavalidation.js")}}"></script>
<script src="{{asset("/assets/js/validation-forms.js")}}"></script>
 <script type="text/javascript">
    $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
</script>
@endsection