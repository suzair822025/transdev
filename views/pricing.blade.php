@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/01.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Pricing</h1>
        <p class="white-text">Over 5000 customers in more than 30 countries have chosen our pricing and services for excellent value translations.</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<!-- Pricing -->
<div class="container">
    <div class="row"><h2 class="h2 mt-5">Please follow the steps to get estimated prices.</h2></div>
    <div class="col-sm-6 col-lg-4 col-md-4 mt-5">
        <h3 class="mb-0">Step 1:</h3>
                <p><strong>What is your desired service?</strong></p>
        <ul class="nav nav-tabs pricing-tabs">
            <li class="text-left">
                <a href="javascript:;" class="Seloptn-btn" data-target="transcription" data-toggle="tab" onclick="rates(1)">
                    <span class="pull-left">
                        <span style="text-decoration: underline;">Transcription</span><p>High quality</p>
                    </span>
                    <span class="pull-right">
                        <img src="{{ asset('/assets/img/transcription-icon.svg') }}" alt="" width="30" height="30">
                    </span>
                </a>
            </li>
            <li class="text-left">
                <a class="Seloptn-btn" data-target="translation" data-toggle="tab" href="javascript:;" onclick="rates(2)">
                    <span class="pull-left">
                        <span class="text-underline">Translation</span><p>Even Better</p>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="pull-right">
                        <path d="M6 3C4.3 3 3 4.3 3 6v20c0 1.7 1.3 3 3 3h.4L8 27H6c-.6 0-1-.4-1-1V6c0-.6.4-1 1-1h20c.6 0 1 .4 1 1v15h-3c-1.7 0-3 1.3-3 3v3h-5l1.6 2H21v3.4l2 1.7V24c0-.6.4-1 1-1h20c.6 0 1 .4 1 1v20c0 .6-.4 1-1 1H24c-.6 0-1-.4-1-1v-2l-2 1.7v.3c0 1.7 1.3 3 3 3h20c1.7 0 3-1.3 3-3V24c0-1.7-1.3-3-3-3H29V6c0-1.7-1.3-3-3-3H6zm10 5v2H8v2h12c-.4 2.2-1.7 4-3.3 5.5C14 15.3 13 13 13 13l-2 1s1.4 2.4 4 4.8c-2.8 2-5.4 3-5.4 3l.6 1.8s3-1 5.8-3c.2 0 .4-.3.7-.5 1 1 2.4 1.7 4 2.3l.7-1.8c-1.2-.5-2.2-1-3-1.7 1.7-1.8 3.2-4 3.5-6.8h3v-2h-7V8h-2zm-4 17l-5 6h3v4h4v-4h3l-5-6zm21 1.4l-5.2 13.8h2.5l1-3.2h5.4l1 3.2h2.6L35 26.4h-2zm1 3l2 5.7h-4l2-5.6zM19 33v3h-9l4 4h5v3l6-5-6-5z"/>
                    </svg>
                </a>
            </li>
            <li class="text-left">
                <a class="Seloptn-btn" data-target="docs" data-toggle="tab" href="javascript:;" onclick="rates(3)">
                    <span class="pull-left">
                        <span class="text-underline">Documents</span><p>You won't beleive it</p>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="pull-right">
                        <path d="M37 2a1 1 0 0 0-.2 0H20v5.8l.8.8L22 9.8V4h14v10h10v24H32v2h16V13.2a1 1 0 0 0 0-.4v-.2l-.2-.2a1 1 0 0 0-.2-.2l-9.8-9.8a1 1 0 0 0-.2-.2l-.2-.2h-.2a1 1 0 0 0-.2 0zm1 3.4l6.6 6.6H38V5.4zM19 10a1 1 0 0 0-.2 0H2v38h28V21.2a1 1 0 0 0 0-.4v-.2l-.2-.2a1 1 0 0 0-.2-.2l-9.8-9.8a1 1 0 0 0-.2-.2l-.2-.2h-.2a1 1 0 0 0-.2 0zM4 12h14v10h10v24H4V12zm16 1.4l6.6 6.6H20v-6.6zM30.2 18l2 2H42v-2H30.2zm1.8 6v2h6v-2h-6zM8 26v2h16v-2H8zm24 4v2h10v-2H32zM8 32v2h12v-2H8zm0 6v2h16v-2H8z" />
                    </svg>
                </a>
            </li>
        </ul>
        <!--// end row -->
    </div>
    <div class="col-sm-6 col-lg-4 col-md-4 mt-5">
        <div id="show-step2" class="section-steps">
            <h3 class="mb-0">Step 2:</h3>
            <p class="mb-0"><strong>What is your desired delivery time?</strong></p>
            <p></p>
            <ul class="nav nav-tabs pricing-tabs">
                <li class="text-left">
                    <a href="javascript:;" class="Seloptn-btn2 fullwidth" data-target="1" data-related="Flexible" data-toggle="tab">
                        <span class="pull-left">
                            <span class="text-underline">Flexible</span><p>5-8 Days</p>
                        </span>
                        <span class="pull-right">
                            <span> $</span> <i id="flexible_price" class="no-style"></i>/<strong class="flexible-unit" id="flexible_unit"></strong>
                        </span>
                    </a>
                </li>
                <li class="text-left">
                    <a href="javascript:;" class="Seloptn-btn2 fullwidth" data-related="Standard" data-toggle="tab" data-target="2">
                        <span class="pull-left">
                            <span class="text-underline">Standard</span><p>2-5 Days</p>
                        </span>
                        <span class="pull-right">
                            <span> $</span> <i id="standard_price" class="no-style"></i>/<strong class="standard-unit" id="standard_unit"></strong>
                        </span>
                    </a>
                </li>
                <li class="text-left">
                    <a href="javascript:;" class="Seloptn-btn2 fullwidth" data-related="Express" data-toggle="tab" data-target="3">
                        <span class="pull-left">
                            <span class="text-underline">Express</span><p>24 Hours</p>
                        </span>
                        <span class="pull-right">
                            <span> $</span> <i id="express_price" class="no-style"></i>/<strong class="express-unit" id="express_unit"></strong>
                        </span>
                    </a>
                </li>
            </ul>
        </div> <!-- .##/ transcriptoin-step2  -->
    </div>
    <div class="col-lg-4 col-md-3 mt-5">
        <div id="show-step3" class="section-steps" style="float: left;">
            <h3 class="mb-0">Step 3:</h3>
            <p>How many <span id="calcUnit"></span> does your file have?</p>
                <div class="input-group">
                    <div class="spinner">
                        <input id="s3-input" type="text" placeholder="0" class="form-control border1px" value="0">
                        <div class="input-group-btn-vertical">
                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button>
                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button>
                        </div>
                    </div>
                    <span class="input-group-addon" id="s3-unit" style="width: 86px;"><span class="unit"></span></span>
                </div>
                
            <div class="col-sm-12 mt-4" id="s4">
                <h2>It would cost you<br><strong style="color: #68de37;">$<span id="s3-price" class="finalprice-text"></span></strong></h2>
            </div>
            <div class="col-sm-12">
                <a href="{{ url('order') }}" class="btn-theme btn-theme-sm text-uppercase">Order now</a> 
            </div>
        </div> <!-- ##// show-step3   -->
    </div>
</div>
<div class="clearfix"></div>
<div class="section-seperator mt-5">
    <div class="content-lg container pb-0 space20px">
       <h3>What makes us different?</h3>
        <p>Leebon isn’t your average agency. With 6000+ pre-tested linguists in every country of the world, you’ll get accurate and detailed transcription/translations at ⅙ the price of other service providers.</p>
         <h3>Scale-friendly</h3>
        <p>While other services rates are calculated per page or per hour, we make going global cheap with low per-word/min prices and no minimum fees. The price you pay for work is based on volume, so you can afford to transcribe/translate anything and everything.</p>
        <h3>High quality at low rates</h3>
        <p>Our sophisticated platform and built-in tools for quality allow us to deliver top-notch human transcription/translation at world-beating prices. No other company can provide fast and high quality work at a more competitive rate.</p>
        <h3>Simple pricing</h3>
        <p>Leebon believes in full transparency. When ordering on our platform, you’ll only pay for what you order—no minimum spend, setup fees or hidden costs.</p>
    </div>
</div>

<form id="frmAC">

</form>

<!-- End Steps -->


<!--========== END PAGE LAYOUT ==========-->
<!-- End Clients -->
<!--========== END PAGE LAYOUT ==========-->

@endsection

@section('scripts')
<script src="{{asset("/assets/js/scripts.js")}}"></script>

<script type="text/javascript">
 $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });

    function rates(h){
      var formData = new FormData($('#frmAC')[0]);
        formData.append('_token',"{{ csrf_token() }}");
        formData.append('opt',h);

     jQuery.ajax({
                    url: "{{  url('rates') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function (response) {
                         if(response.success){
                            if(h==1 || h==2){
                                $('#flexible_price').text(response.f);
                                $('#standard_price').text(response.s);
                                $('#express_price').text(response.e);
                                $('#flexible_unit').text('MINUTE');
                                $('#standard_unit').text('MINUTE');
                                $('#express_unit').text('MINUTE');
                            }else if(h==3){
                                $('#flexible_price').text(response.f);
                                $('#standard_price').text(response.s);
                                $('#express_price').text(response.e);
                                $('#flexible_unit').text('WORD');
                                $('#standard_unit').text('WORD');
                                $('#express_unit').text('WORD');
                            }
                         }
                    }
                });   
    }
</script>
@endsection