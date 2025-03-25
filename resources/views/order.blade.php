@extends('layouts.app')

@section('style')

<link href="{{ asset('/assets/css/basic.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

<style>
.lang .col-sm-3,
.lang .col-sm-6,
.lang .col-sm-9,
.lang .col-sm-10 {
    padding-left: 0;
    padding-right: 0;
}

.orderFile {
    border: 1px solid grey;
    display: block;
    height: 150px;
    width: 100%;
    overflow: hidden;
    text-align: center;
    line-height: 150px !important;
}
#file {
    position: absolute;
    width: 95%;
    height: 150px;
    opacity: 0;
    cursor:pointer
}

table {
  table-layout: fixed;
  width: 100%;
  border-spacing: 0 1em;
}
th {
    background-color: #cacaca;
    padding: 1rem 1rem;
    font-weight: 500;
}
thead:after {
    content: "-";
    display: block;
    line-height: 1em;
    color: transparent;
}
tfoot td {padding: .5em 1em;}
tbody td {
    padding: 1%;
    border-bottom: solid #cacaca;
    word-wrap: break-word;
    font-size: 14px;
    vertical-align: center;
}

.modal-header {
    border-radius: 6px 6px 0px 0px;
    background-color: #3ec2f9;
}
.modal-header h4 {
    color: white;
}
.select2-container--default .select2-selection--single {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    height: 40px;
    font-size: 14px;
    font-weight: 400;
    color: #a6a7aa;
    background: #fafafa;
    border: solid 1px #c5c5c5;
    box-shadow: none;
    border-radius: 0;
    padding-left: 7px;
    padding-top: 6px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    top: 60%;
    margin-top: 0;
}

.has-error .select2-container--default .select2-selection--single {
    border-color: #a94442;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
}
</style>

@endsection

@section('content')
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/01.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Order Now</h1>
        <p class="white-text">Place your order today by selecting your desired package plan. We look forward to serving you.</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container space20px">
       <?php 
             Session::forget('files');
             Session::forget('OrderTotalAmount');
             Session::forget('OrderFiles');
        ?> 
      @if($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>PAYMENT DONE!</strong> {!! $message !!}
         </div>
          <?php 
             Session::forget('success');
          ?>
        @endif
        @if($message = Session::get('error'))
           <div class="alert alert-danger alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>PAYMENT FAILED!</strong> {!! $message !!}
         </div>
          <?php 
             Session::forget('error');
          ?>
        @endif

    
       <div class="row mb-5">
            <ul class="nav nav-tabs custom-tabs text-center">
                <li class="active" onclick="activeTranscription()"><a data-toggle="tab" href="#Transcription" data-target="transcription" class="col-xs-12 selectService">Transcription</a>

                 <input type="radio" name="btn_pkg" id="transcription" value="transcription" style="display:none" checked="checked" />  
                </li>
                <li onclick="activeTranslation()"><a data-toggle="tab" href="#Translation" data-target="translation" class="col-xs-12 selectService">Translation</a>
                 <input type="radio" name="btn_pkg" id="translation" value="translation" style="display:none"/> 
                </li>
                <li onclick="activeDocuments()"><a data-toggle="tab" href="#Documents" data-target="docs" class="col-xs-12 selectService">Documents</a>
                   <input type="radio" name="btn_pkg" id="documents" value="documents" style="display:none"/> 
                </li>
            </ul>
        </div>

        {{-- <div class="col-sm-12 col-md-7 sm-margin-b-50 ml-2 progress_list">
        </div> --}}

        <!-- Contact List -->
        <div class="col-sm-12 col-md-7 sm-margin-b-50 ml-2">
            <form id="frmAC">
                <div class="row lang">
                    <div class="col-sm-3 col-md-3">
                        <input type="button" value="Add Url" class="btn-theme btn-theme-sm footer-btn" data-toggle="modal" data-target="#modal-add-url">
                    </div>
                        <div class="col-sm-9 col-md-9" style="">
                        <div class="col-sm-6 form-group">
                            <label class="col-sm-2" for="from_lang" style="padding-left:0; line-height: 40px;">From </label>
                            <div class="col-sm-10">
                                <select id="from_lang" class="form-control select2" name="from_language_id">
                                    <option hidden selected disabled value="">Select</option>
                                    @foreach($languages as $language)
                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="col-sm-2" for="to_lang" style="line-height: 40px;">To </label>
                            <div class="col-sm-10">
                                <select id="to_lang" class="form-control select2" name="to_language_id">
                                    <option hidden selected disabled value="">Select</option>
                                    @foreach($languages as $language)
                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="margin-bottom: 2%">
                    <input type="checkbox" id="dont_know_language"> I do not know language.
                </div>

                <hr>

                <div class="progress_list"></div>

                <div class="orderFile">
                    <input type="file" id="file" name="files[]" class="form-control" multiple />
                    <span style="font-size: 15px;">Drop files here to upload</span>
                </div>
            </form>

            <hr>

            <div class="clearfix"></div>
            <div class="row" style="font-size: 12px;">
                <table style="width:100%">
                    <thead>
                        <tr>
                            <th width="3%"></th>
                            <th width="25%">Filename/ URL</th>
                            <th width="11%">From Language</th>
                            <th width="11%">To Language</th>
                            <th width="15%">Duration/Word</th>
                            <th width="20%">Calculation</th>
                            <th width="10%">Cost</th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    <tbody class="row order-items">
                    </tbody>
                        
                    <tfoot class="pricetable-total-row">
                        <td width="3%"></td>
                        <td width="25%"><strong>Total</strong></td>
                        <td width="11%"></td>
                        <td width="11%"></td>
                        <td width="15%"></td>
                        <td width="20%"></td>
                        <td width="10%" class="total" id="listTotal">$0.00</td>
                        <td width="5%"></td>
                    </tfoot>
                </table>
            </div>
            
            <div class="row my-5">
                <div class="pull-left">
                    <img src="{{ asset('/assets/img/payment-gateways-logos.svg') }}" alt="" width="200">
                </div>
                <div class="pull-right text-right">
                    <form  method="POST" id="payment-form" action="{{ route('paypal') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="amount" id="orderAmount" value="">
                        <input type="hidden" name="files" id="orderFiles" value="">
                        <button type="button" class="btn-theme btn-theme-sm text-uppercase" id="checkout">Checkout</button>
                        <div class="clearfix"></div>
                        <span class="gr-total">Total $0.00</span>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 sm-margin-b-50 bg-color-sky-light pull-right px-5 py-5" id="pricingOptions">
            <h3><span class="pkg-name">Transcription</span> Packages</h3>
            <p class="my-0"><strong>Flexible</strong></p>
            <div class="mb-4">
                <label class="pkg-flexible">
                    <input type="radio" id="price1" onchange="mine('price1')" name="price" value="flexible" checked class="radio-pricing">
                    <span class="l0 p-name p-sel">5-8 Days</span>
                    <span class="r-dollar p-sel">$<i id="flexible_price">{{ $mode1->flexible_per_sec_word }}</i>/<span class="calcUni" id="flexible_calcUnit">min</span></span>
                </label>
            </div>
            <p class="mb-0"><strong>Standard</strong></p>
            <div class="mb-4">
                <label class="pkg-standard">
                    <input type="radio" id="price2" onchange="mine('price2')" name="price" value="standard" class="radio-pricing">
                    <span class="l0 p-name p-sel">1 Business Day</span>
                    <span class="r-dollar p-sel">$<i id="standard_price">{{ $mode1->standard_per_sec_word }}</i>/<span class="calcUni" id="standard_calcUnit">min</span></span>
                </label>
            </div>
            <p class="mb-0"><strong>Express</strong></p>
            <div class="mb-4">
                <label class="pkg-express">
                    <input type="radio" id="price3" onchange="mine('price3')" name="price" value="express" class="radio-pricing">
                    <span class="l0 p-name p-sel">2 Business Days</span>
                    <span class="r-dollar p-sel">$<i id="express_price">{{ $mode1->express_per_sec_word }}</i>/<span class="calcUni" id="express_calcUnit">min</span></span>
                </label>
            </div>

            <div class="clearfix"></div>
            <h5 class="mb-0" style="display: none">Options</h5>
             <div class="mb-2" style="display: none">
                <label>
                    <input type="radio" name="opt" id="none" value="none" checked="checked" onchange="changeOpt(1)">
                    <span class="l0 p-name p-sel">None</span>
                    <span class="r-dollar p-sel" id="optNone">addl. $0.0/min</span>
                </label>
            </div>
            <div class="mb-2" style="display: none">
                <label>
                    <input type="radio" name="opt" id="verbatim" value="verbatim" onchange="changeOpt(2)">
                    <span class="l0 p-name p-sel">Verbatim</span>
                    <span class="r-dollar p-sel" id="verb">addl. $.25/min</span>
                </label>
            </div>
            <div class="my-2" style="display: none">
                <label>
                    <input type="radio" name="opt" id="timestamp" value="timestamp" onchange="changeOpt(3)">
                    <span class="l0 p-name p-sel">Timestamp</span>
                    <span class="r-dollar p-sel" id="time">addl. $.25/min</span>
                </label>
            </div>
            <div>
                <!-- <h2 class="title-delDate">Delivery Date <span class="delivery-date">03/19/18</span></h2> -->
            </div>
        </div>
        <!-- End Contact List -->
        <!--// end row -->
    </div>
</div>
<!-- End Contact List -->
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please login/register your account before placing order...</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    <form id="frmBC">
                        <div class="form-group margin-b-30">
                          <span id="lgnMessage"></span>
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                          <br>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="button" id="btnLGN" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Login</button>
                    </form>
                </div>
                <div class="col-md-7">
                    <span id="registerMessage"></span>
                    <form class="form-horizontal" id="register_form">
                        {{ csrf_field() }}
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="name" placeholder="First Name" class="form-control" type="text" value="{{ old('name') }}" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('name') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" >Last Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="last_name" placeholder="Last Name" class="form-control" type="text" value="{{ old('last_name') }}" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('last_name') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="phone" placeholder="Phone" class="form-control" type="text" value="{{ old('phone') }}" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('phone') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Company</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="company" placeholder="Company" class="form-control" type="text" value="{{ old('company') }}" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('company') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="email" placeholder="E-Mail Address" class="form-control" type="text" value="{{ old('email') }}" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('email') }}
                                    </p>
                                </div>
                            </div>
                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label" >Password</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="password" placeholder="Password" class="form-control" type="password" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('password') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" >Confirm Password</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="password_confirmation" placeholder="Confirm Password" class="form-control" type="password" />
                                    </div>
                                    <p class="text-danger">
                                        {{ $errors->first('password_confirmation') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <button type="button" id="btnRegister" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" >SUBMIT</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div> 
            </div>
        </div>
      </div>
      
    </div>
  </div>


<!--========== modal-edit-language ==========-->
  <!-- The Modal -->
  <div class="modal fade" id="modal-edit-language">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Edit Language</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form id="languageForm">
                <div class="col-sm-6 form-group">
                    <label for="edit_from_language">From Language</label>
                    <select id="edit_from_language" class="form-control select2 language" name="from_language_id">
                        <option hidden selected disabled>Select</option>z
                        @foreach($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="edit_to_language">To Language</label>
                    <select id="edit_to_language" class="form-control select2 language" name="to_language_id">
                        <option hidden selected disabled>Select</option>z
                        @foreach($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="clearfix"></div>
                <input type="hidden" class="index" value="" name="index" >
                <input type="hidden" class="filename" value="" name="filename" >
                <input type="hidden" class="mode" value="" name="mode" >
            </form>
            <div style="text-align: center;">
                <input type="button" value="Save" class="btn-theme btn-theme-sm footer-btn update_language" >
            </div>
        </div>
        
      </div>
    </div>
  </div>

<!--========== modal-edit-language ==========-->

<!--========== modal-add-url ==========-->
  <!-- The Modal -->
    <div class="modal fade" id="modal-add-url">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Url</h4>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form id="urlForm">
                    <div class="form-group">
                        <label for="file_url">Url</label>
                        <input type="text" class="form-control url" id="file_url" name="url" placeholder="Enter File Url">
                    </div>
                </form>
                <div style="text-align: center;">
                    <input type="button" value="Upload" class="btn-theme btn-theme-sm footer-btn add_url" >
                </div>
            </div>
            
          </div>
        </div>
    </div>
    
<!--========== modal-add-url ==========-->


<!--========== END PAGE LAYOUT ==========-->

@endsection

@section('scripts')
<script src="{{ asset('/assets/js/scripts.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/dropzone.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/bootstrap-formavalidation.js') }}"></script>
<script src="{{ asset('/assets/js/validation-forms.js') }}"></script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){
        $('.select2').select2();
        if ($("#transcription").is(":checked")) {
            $("#to_lang").closest('.form-group').hide();

            var formLangGroup = $("#from_lang").attr('placeholder', "Enter Transcription Language").closest('.form-group').removeClass('col-sm-6').addClass('col-sm-12');
            formLangGroup.find('div').removeClass('col-sm-10').addClass('col-sm-7');
            formLangGroup.find('label').removeClass('col-sm-2').addClass('col-sm-5').text("Transcription Language");
        }
    });

    $('#file').change(function(){
        var files = this.files;
        var valid = true;

        var selected_file = $(this).val();
        if (selected_file.length <= 0) {
            return;
        }


        isTranscription = $("#transcription").is(":checked");
        isTranslation = $("#translation").is(":checked");
        isDocuments = $("#documents").is(":checked");


        dont_know_language = $("#dont_know_language").is(":checked");
        if (!dont_know_language) {

            if (isTranscription) {
                from_lang = $('#from_lang').val();
                if (from_lang == null) {
                    alert("Please enter Transcription Language.");
                    $(this).val('');
                    return;
                }
            }
        }



        if(isTranslation || isDocuments) {
            from_lang = $('#from_lang').val();
            to_lang = $('#to_lang').val();


            dont_know_language = $("#dont_know_language").is(":checked");
            if (!dont_know_language) {
                if (from_lang == null || to_lang == null) {
                    alert("Please enter from-language and to-language.");
                    $(this).val('');
                    return;
                }
            }
        }

        $.each(files, function (i, file) {
            var ext = file.name.replace(/^.*\./, '').toLowerCase();
            var extension = ['mp4','avi','ogg','webm','pdf','doc','docx','mp3','wav','wma','aiff','pcm','flac']
            if(jQuery.inArray(ext, extension) == -1){
                alert('Please select valid file having extension mp4,avi,ogg,.wav,mp3,wma,aiff,pcm,flac,webm,pdf,doc & docx.');
                valid = false;
                return;
            }
        });

        if (valid) {
            var formData = new FormData($('#frmAC')[0]);
            formData.append('_token',"{{ csrf_token() }}");
            formData.append('file',files[0]);

            UploadFile(formData);
        }
    });

    function activeTranscription(){
        $('#transcription').attr('checked',true);
        formData = new FormData($('#frmAC')[0]);
        formData.append('mode',1);
        jQuery.ajax({
            url: "{{  url('mode') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (response) {
                if(response.success){
                    $('#flexible_price').text(response.pkg.flexible_per_sec_word);
                    $('#standard_price').text(response.pkg.standard_per_sec_word);
                    $('#express_price').text(response.pkg.express_per_sec_word);
                    $("#express_calcUnit").text('min');
                    $("#standard_calcUnit").text('min');
                    $("#flexible_calcUnit").text('min');
                    $("#verb").text("addl. $.25/min");
                    $("#optNone").text("addl. $0.0/min");
                    $("#time").text("addl. $.25/min");
                    $("#to_lang").closest('.form-group').hide();

                    var formLangGroup = $("#from_lang").attr('placeholder', "Enter Transcription Language") .closest('.form-group').removeClass('col-sm-6').addClass('col-sm-12');
                    formLangGroup.find('div').removeClass('col-sm-10').addClass('col-sm-7');
                    formLangGroup.find('label').removeClass('col-sm-2').addClass('col-sm-5').text("Transcription Language");
                }
            }
        });

    }
    function activeTranslation(){
        $('#translation').attr('checked',true);
        formData = new FormData($('#frmAC')[0]);
        formData.append('mode',2);
        jQuery.ajax({
            url: "{{  url('mode') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (response) {

                if(response.success){
                    $('#flexible_price').text(response.pkg.flexible_per_sec_word);
                    $('#standard_price').text(response.pkg.standard_per_sec_word);
                    $('#express_price').text(response.pkg.express_per_sec_word);
                    $("#express_calcUnit").text('min');
                    $("#standard_calcUnit").text('min');
                    $("#flexible_calcUnit").text('min');

                    $("#verb").text("addl. $.25/min");
                    $("#optNone").text("addl. $0.0/min");
                    $("#time").text("addl. $.25/min");
                    $("#to_lang").closest('.form-group').show();

                    var formLangGroup = $("#from_lang").attr('placeholder', "Enter From Language").closest('.form-group').removeClass('col-sm-12').addClass('col-sm-6');
                    formLangGroup.find('div').removeClass('col-sm-7').addClass('col-sm-10');
                    formLangGroup.find('label').removeClass('col-sm-5').addClass('col-sm-2').text("From");
                }
            }
        });
    }
    function activeDocuments(){
        $('#documents').attr('checked',true);
        formData = new FormData($('#frmAC')[0]);
        formData.append('mode',3);
        jQuery.ajax({
            url: "{{  url('mode') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (response) {

                if(response.success){
                    $('#flexible_price').text(response.pkg.flexible_per_sec_word);
                    $('#standard_price').text(response.pkg.standard_per_sec_word);
                    $('#express_price').text(response.pkg.express_per_sec_word);
                    $("#express_calcUnit").text('word');
                    $("#standard_calcUnit").text('word');
                    $("#flexible_calcUnit").text('word');
                    $("#verb").text("addl. $.25/word");
                    $("#optNone").text("addl. $0.0/word")
                    $("#time").text("addl. $.25/word");
                    $("#to_lang").closest('.form-group').show();

                    var formLangGroup = $("#from_lang").attr('placeholder', "Enter From Language").closest('.form-group').removeClass('col-sm-12').addClass('col-sm-6');
                    formLangGroup.find('div').removeClass('col-sm-7').addClass('col-sm-10');
                    formLangGroup.find('label').removeClass('col-sm-5').addClass('col-sm-2').text("From");
                }
            }
        });

    }
    function changeOpt(id){
        formData = new FormData($('#frmAC')[0]);
        formData.append('opt',id);
        if($("#transcription").is(":checked")){
            formData.append('mode',1);
        }else if($("#translation").is(":checked")){
            formData.append('mode',2);
        }else if($("#documents").is(":checked")){
            formData.append('mode',3);
        }

        jQuery.ajax({
            url: "{{  url('changeOpt') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (response) {

                if(response.success){
                    html = '';
                    prices = '';
                    files = '';
                    var total = 0;
                    var wordOrSeconds;

                    $('.order-items').empty();

                    for(var i=0;i<response.files.length;i++){

                        fromLanguage = response.files[i].from_language;
                        toLanguage = response.files[i].to_language;
                        fromLanguage = (fromLanguage == null) ? "" : fromLanguage;
                        toLanguage = (toLanguage == null) ? "" : toLanguage;
                        fileSelected = response.selectedFiles.includes(response.files[i].request_id);

                        files += response.files[i].name+'*';
                        files += response.files[i].newName+'*';
                        files += response.files[i].fileSize+'*';
                        files += response.files[i].ext+'*';
                        files += response.files[i].numberWords+'*';
                        files += response.files[i].mode+'*';
                        files += response.files[i].price+'*';
                        files += response.files[i].opt+'*';
                        files += response.files[i].pkg+'*';
                        files += fromLanguage+'*';
                        files += toLanguage+'*';
                        files += response.files[i].file_uploaded_via_url+'*';
                        files += '~';

                        pkg = response.files[i].pkg;
                        opt = response.files[i].opt;
                        mode = response.files[i].mode;

                        if (fileSelected == true) {
                            fileSelected = "checked";
                        }

                        if(pkg==1){
                            pkg = 'flexible';
                        }else if(pkg==2){
                            pkg = 'standard';
                        }else if(pkg==3){
                            pkg = 'express';
                        }

                        if(mode==1){
                            mode = 'Transcription';
                            wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                        }else if(mode==2){
                            mode = 'Translation';
                            wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                        }else if(mode==3){
                            mode = 'Documents';
                            wordOrSeconds = response.files[i].numberWords + " <small>(words)</small>";
                        }


                        if(opt==1){
                            opt = 'None';
                            extra = 0;
                        }else if(opt==2){
                            opt = 'verbatim';
                            extra = 0.25;
                        }else if(opt==3){
                            opt = 'timestamp';
                            extra = 0.25;
                        }
                        total += extra;

                        html += '<tr>';
                        html += '<td><input type="checkbox" name="fIndex[]" class="fIndex" request_id="'+response.files[i].request_id+'" value="'+i+'" '+fileSelected+'></td>';
                        html += '<td>'+response.files[i].name+'<br><small style="color:red">'+mode+'&nbsp;</small><small style="color:blue">'+pkg+'&nbsp;</small><small style="color:green;display:none;">'+opt+'&nbsp;</small><br><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-edit-language" onClick="EditLanguage('+i+', \''+response.files[i].newName+'\', \''+fromLanguage+'\', \''+toLanguage+'\', '+response.files[i].mode+')" >Edit Language &nbsp;</a></td>';
                        html += '<td>'+(fromLanguage != "" ? fromLanguage : "---")+'</td>';
                        html += '<td>'+(toLanguage != "" ? toLanguage : "---")+'</td>';
                        html += '<td>'+response.files[i].numberWords+'</td>';
                        html += '<td>'+ response.files[i].charge +" X "+ wordOrSeconds +'</td>';
                        html += '<td>'+ (parseFloat(response.files[i].price)+extra).toFixed(2) +'</td>';
                        html += '<td><i style="cursor:pointer;color:red;" onclick="deleteItem(\''+response.files[i].newName+'\',\''+i+'\')" class="glyphicon glyphicon-trash"></i></td>';
                        html += '</tr>';
                    }
                    $('.order-items').append(html);
                    $('.gr-total').text('Total $'+(parseFloat(total)+parseFloat(response.total)).toFixed(2) );
                    $('#orderAmount').val((parseFloat(total)+parseFloat(response.total)).toFixed(2));
                    $('#orderFiles').val(files);
                    $('#listTotal').text('$'+(parseFloat(total)+parseFloat(response.total)).toFixed(2));

                }else{
                    alert('Something went wrong please try again...');
                }
            }
        });

    }
    function mine(id){

        formData = new FormData($('#frmAC')[0]);
        if($("#transcription").is(":checked")){
            formData.append('mode',1);
        }else if($("#translation").is(":checked")){
            formData.append('mode',2);
        }else if($("#documents").is(":checked")){
            formData.append('mode',3);
        }
        if(id=='price1'){
            formData.append('pkg',1);
        }else if(id=='price2'){
            formData.append('pkg',2);
        }else if(id=='price3'){
            formData.append('pkg',3);
        }

        if($("#none").is(":checked")){
            formData.append('opt',1);
        }else if($("#verbatim").is(":checked")){
            formData.append('opt',2);
        }else if($("#timestamp").is(":checked")){
            formData.append('opt',3);
        }

        $(".fIndex:checked").each(function() {
            formData.append('selectedFiles[]',$(this).attr('request_id'));
        });

        jQuery.ajax({
            url: "{{  url('changePkg') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (response) {

                if(response.success){
                    html = '';
                    prices = '';
                    files = '';
                    var total = 0;
                    var wordOrSeconds;
                    $('.order-items').empty();

                    for(var i=0;i<response.files.length;i++){

                        fromLanguage = response.files[i].from_language;
                        toLanguage = response.files[i].to_language;
                        fromLanguage = (fromLanguage == null) ? "" : fromLanguage;
                        toLanguage = (toLanguage == null) ? "" : toLanguage;
                        fileSelected = response.selectedFiles.includes(response.files[i].request_id);

                        files += response.files[i].name+'*';
                        files += response.files[i].newName+'*';
                        files += response.files[i].fileSize+'*';
                        files += response.files[i].ext+'*';
                        files += response.files[i].numberWords+'*';
                        files += response.files[i].mode+'*';
                        files += response.files[i].price+'*';
                        files += response.files[i].opt+'*';
                        files += response.files[i].pkg+'*';
                        files += fromLanguage+'*';
                        files += toLanguage+'*';
                        files += response.files[i].file_uploaded_via_url+'*';
                        files += '~';

                        pkg = response.files[i].pkg;
                        opt = response.files[i].opt;
                        mode = response.files[i].mode;

                        if (fileSelected == true) {
                            fileSelected = "checked";
                        }

                        if(pkg==1){
                            pkg = 'flexible';
                        }else if(pkg==2){
                            pkg = 'standard';
                        }else if(pkg==3){
                            pkg = 'express';
                        }

                        if(mode==1){
                            mode = 'Transcription';
                            wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                        }else if(mode==2){
                            mode = 'Translation';
                            wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                        }else if(mode==3){
                            mode = 'Documents';
                            wordOrSeconds = response.files[i].numberWords + " <small>(words)</small>";
                        }


                        if(opt==1){
                            opt = 'None';
                            extra = 0;
                        }else if(opt==2){
                            opt = 'verbatim';
                            extra = 0.25;
                        }else if(opt==3){
                            opt = 'timestamp';
                            extra = 0.25;
                        }

                        total += extra;
                        html += '<tr>';
                        html += '<td><input type="checkbox" name="fIndex[]" class="fIndex" request_id="'+response.files[i].request_id+'" value="'+i+'" '+fileSelected+'></td>';
                        html += '<td>'+response.files[i].name+'<br><small style="color:red">'+mode+'&nbsp;</small><small style="color:blue">'+pkg+'&nbsp;</small><small style="color:green;display:none;">'+opt+'&nbsp;</small><br><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-edit-language" onClick="EditLanguage('+i+', \''+response.files[i].newName+'\', \''+fromLanguage+'\', \''+toLanguage+'\', '+response.files[i].mode+')" >Edit Language &nbsp;</a></td>';
                        html += '<td>'+(fromLanguage != "" ? fromLanguage : "---")+'</td>';
                        html += '<td>'+(toLanguage != "" ? toLanguage : "---")+'</td>';
                        html += '<td>'+response.files[i].numberWords+'</td>';
                        html += '<td>'+ response.files[i].charge +" X "+ wordOrSeconds +'</td>';
                        html += '<td>'+ (parseFloat(response.files[i].price)+extra).toFixed(2) +'</td>';
                        html += '<td><i style="cursor:pointer;color:red;" onclick="deleteItem(\''+response.files[i].newName+'\',\''+i+'\')" class="glyphicon glyphicon-trash"></i></td>';
                        html += '</tr>';
                    }
                    $('.order-items').append(html);
                    $('.gr-total').text('Total $'+(parseFloat(total)+parseFloat(response.total)).toFixed(2) );
                    $('#orderAmount').val((parseFloat(total)+parseFloat(response.total)).toFixed(2));
                    $('#orderFiles').val(files);
                    $('#listTotal').text('$'+(parseFloat(total)+parseFloat(response.total)).toFixed(2));

                }else{
                    alert('Something went wrong please try again...');
                }
            }
        });

    }

    $("#checkout").click(function(e) {
        jQuery.ajax({
            url: "{{  url('checkLogin') }}",
            cache: false,
            contentType: false,
            processData: false,
            type: 'GET',
            success: function (response) {},
            statusCode: {
                200: function(xhr) {
                    var files = $('#orderFiles').val().split('~').slice(0, -1);
                    if (files.length > 0) {
                        formValid = true;
                        dont_know_language = $("#dont_know_language").is(":checked");
                        if (!dont_know_language) {
                            $.each(files, function( index, file ) {
                                var fData = file.split('*');

                                if (fData[5] == 1) {
                                    if (fData[9] == "" || fData[9] == null) {
                                        formValid = false;
                                    }
                                }

                                if (fData[5] == 2 || fData[5] == 3) {
                                    if (fData[9] == "" || fData[9] == null ||  fData[10] == "" || fData[10] == null) {
                                        formValid = false;
                                    }
                                }
                            });
                        }

                        if (formValid) {
                            $("#payment-form").submit();
                        } else {


                            dont_know_language = $("#dont_know_language").is(":checked");
                            if (!dont_know_language) {

                                if (fData[5] == 1) {
                                    alert("Please enter Transcription Language.");
                                } else {
                                    alert("Please enter from-language and to-language.");
                                }
                            }

                        }
                    }
                },
                201: function(xhr){
                    $('#myModal').modal('toggle');
                }
            }
        });
    });

    $('#btnLGN').click(function(){
        var email = $('#email').val();
        var password = $('#password').val();

        if(email!='' && password!=''){
            formData = new FormData($('#frmBC')[0]);
            formData.append('_token',"{{ csrf_token() }}");
            formData.append('email',$('#email').val());
            formData.append('password',$('#password').val());

            jQuery.ajax({
                url: "{{ route('login') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                beforeSend: function() {
                    $('.loader').show();
                },
                success:function(response){
                    $('#lgnMessage').html('<div class="alert alert-success"><p>Your are successfully now you can proceed...</p></div>');
                    setInterval(function(){$('#myModal').modal('hide');},3000);

                    $('#checkMeOut').html('<a href="{{ url("home") }}" class="md-trigger"><i class="service-icon icon-user"></i>&nbsp;My Account</a>');

                },
                statusCode: {
                    422: function(xhr) {
                        if(window.console) {$('#lgnMessage').html('<div class="alert alert-danger"><p>Wrong credentials...</p></div>');};
                    },200: function(xhr) {
                        // if(window.console) { $('#payment-form').removeAttr('onsubmit'); };
                    }
                },
                complete: function() {
                    $('.loader').hide();
                }
            });
        }else{
            alert('Please enter email and password.');
        }

    });

    $('#btnRegister').click(function(){
        var formData = new FormData($('#register_form')[0]);

        if ($('#register_form').bootstrapValidator('validate').has('.has-error').length == 0) {
            $.ajax({
                url: "{{ url('register') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.loader').show();
                },
                success: function(result) {
                    $('#registerMessage').html('<div class="alert alert-success"><p>Your account successfully created...</p></div>');
                    setInterval(function(){$('#myModal').modal('hide');},3000);

                    $('#checkMeOut').html('<a href="{{ url("home") }}" class="md-trigger"><i class="service-icon icon-user"></i>&nbsp;My Account</a>');
                },
                error: function(jqXHR, exception) {
                    if (jqXHR.status == 422) {
                        var response = JSON.parse(jqXHR.responseText);
                        var fieldsWithError = Object.keys(response);
                        var allInputs = $('#register_form input')

                        $.each(allInputs, function(i, input) {
                            fieldName = $(input).attr('name');

                            if ($.inArray( fieldName, fieldsWithError ) >= 0) {
                                $(input).parents('.form-group').addClass('has-error').find('.text-danger').text(response[fieldName]);
                            } else {
                                $(input).parents('.form-group').removeClass('has-error').find('.text-danger').text('');
                            }
                        });
                    } else {
                        $('.form-group').removeClass('has-error').find('.text-danger').text('');
                        $('#registerMessage').html('<div class="alert alert-danger"><p>Something went wrong, Please try again...</p></div>');
                    }
                },
                complete: function() {
                    $('.loader').hide();
                }
            });
        }
    });

    function deleteItem(fileName,i){
        var x = confirm('Are you sure you want to delete this file?');
        if(x){
            formData = new FormData($('#frmBC')[0]);
            formData.append('fileName',fileName);
            formData.append('count',i);

            $(".fIndex:checked").each(function() {
                formData.append('selectedFiles[]',$(this).attr('request_id'));
            });

            jQuery.ajax({
                url: "{{ url('deleteItem') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response){
                    if(response.success){
                        html = '';
                        prices = '';
                        files = '';
                        var total = 0;

                        $('.order-items').empty();

                        for(var i=0;i<response.files.length;i++){

                            fromLanguage = response.files[i].from_language;
                            toLanguage = response.files[i].to_language;
                            fromLanguage = (fromLanguage == null) ? "" : fromLanguage;
                            toLanguage = (toLanguage == null) ? "" : toLanguage;
                            fileSelected = response.selectedFiles.includes(response.files[i].request_id);

                            files += response.files[i].name+'*';
                            files += response.files[i].newName+'*';
                            files += response.files[i].fileSize+'*';
                            files += response.files[i].ext+'*';
                            files += response.files[i].numberWords+'*';
                            files += response.files[i].mode+'*';
                            files += response.files[i].price+'*';
                            files += response.files[i].opt+'*';
                            files += response.files[i].pkg+'*';
                            files += fromLanguage+'*';
                            files += toLanguage+'*';
                            files += response.files[i].file_uploaded_via_url+'*';
                            files += '~';

                            pkg = response.files[i].pkg;
                            opt = response.files[i].opt;
                            mode = response.files[i].mode;

                            if (fileSelected == true) {
                                fileSelected = "checked";
                            }

                            if(pkg==1){
                                pkg = 'flexible';
                            }else if(pkg==2){
                                pkg = 'standard';
                            }else if(pkg==3){
                                pkg = 'express';
                            }

                            if(mode==1){
                                mode = 'Transcription';
                                wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                            }else if(mode==2){
                                mode = 'Translation';
                                wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                            }else if(mode==3){
                                mode = 'Documents';
                                wordOrSeconds = response.files[i].numberWords + " <small>(words)</small>";
                            }


                            if(opt==1){
                                opt = 'None';
                                extra = 0;
                            }else if(opt==2){
                                opt = 'verbatim';
                                extra = 0.25;
                            }else if(opt==3){
                                opt = 'timestamp';
                                extra = 0.25;
                            }

                            total += extra;

                            html += '<tr>';
                            html += '<td><input type="checkbox" name="fIndex[]" class="fIndex" request_id="'+response.files[i].request_id+'" value="'+i+'" '+fileSelected+'></td>';
                            html += '<td>'+response.files[i].name+'<br><small style="color:red">'+mode+'&nbsp;</small><small style="color:blue">'+pkg+'&nbsp;</small><small style="color:green;display:none;">'+opt+'&nbsp;</small><br><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-edit-language" onClick="EditLanguage('+i+', \''+response.files[i].newName+'\', \''+fromLanguage+'\', \''+toLanguage+'\', '+response.files[i].mode+')" >Edit Language &nbsp;</a></td>';
                            html += '<td>'+(fromLanguage != "" ? fromLanguage : "---")+'</td>';
                            html += '<td>'+(toLanguage != "" ? toLanguage : "---")+'</td>';
                            html += '<td>'+response.files[i].numberWords+'</td>';
                            html += '<td>'+ response.files[i].charge +" X "+ wordOrSeconds +'</td>';
                            html += '<td>'+ (parseFloat(response.files[i].price)+extra).toFixed(2) +'</td>';
                            html += '<td><i style="cursor:pointer;color:red;" onclick="deleteItem(\''+response.files[i].newName+'\',\''+i+'\')" class="glyphicon glyphicon-trash"></i></td>';
                            html += '</tr>';
                        }
                        $('.order-items').append(html);
                        $('.gr-total').text('Total $'+(parseFloat(total)+parseFloat(response.total)).toFixed(2) );
                        $('#orderAmount').val((parseFloat(total)+parseFloat(response.total)).toFixed(2));
                        $('#orderFiles').val(files);
                        $('#listTotal').text('$'+(parseFloat(total)+parseFloat(response.total)).toFixed(2));

                        $('#file').val('');

                    }else{
                        alert('Something went wrong please try again...');
                    }

                }
            });
        }
    }

    function EditLanguage(i, fileName, from_language, to_language, mode) {
        var form = $("#languageForm");
        edit_from_language = form.find('#edit_from_language');
        edit_to_language = form.find('#edit_to_language');

        edit_from_language.val(from_language);

        if (mode == 1) {
            $(edit_from_language).attr('placeholder', "Enter Transcription Language").siblings('label').text("Transcription Language");
            $(edit_to_language).closest('.form-group').hide();
        } else {
            $(edit_from_language).attr('placeholder', "Enter From Language").siblings('label').text("From Language");
            $(edit_to_language).closest('.form-group').show();
            edit_to_language.val(to_language);
        }

        $(edit_from_language).closest('.form-group').removeClass('has-error');
        $(edit_from_language).siblings('label').removeClass('text-danger');

        $(edit_to_language).closest('.form-group').removeClass('has-error');
        $(edit_to_language).siblings('label').removeClass('text-danger');

        form.find('.index').val(i);
        form.find('.filename').val(fileName);
        form.find('.mode').val(mode);
    }

    $(".update_language").click(function() {

        formData = new FormData($('#languageForm')[0]);
        var mode = formData.get('mode');
        var valid = true
        edit_from_language = $('#edit_from_language')
        edit_to_language = $('#edit_to_language')

        if (mode == 1) {
            formData.delete("to_language");

            if (edit_from_language.val() == null) {
                valid = false;
                $(edit_from_language).closest('.form-group').addClass('has-error');
                $(edit_from_language).siblings('label').addClass('text-danger');
            }
        }
        if (mode == 2 || mode == 3) {
            if (edit_from_language.val() == null) {
                valid = false;
                $(edit_from_language).closest('.form-group').addClass('has-error');
                $(edit_from_language).siblings('label').addClass('text-danger');
            }

            if (edit_to_language.val() == null) {
                valid = false;
                $(edit_to_language).closest('.form-group').addClass('has-error');
                $(edit_to_language).siblings('label').addClass('text-danger');
            }
        }

        if (!valid) {
            return
        }

        $(".fIndex:checked").each(function() {
            formData.append('selectedFiles[]',$(this).attr('request_id'));
        });

        jQuery.ajax({
            url: "{{ url('updateLanguage') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success:function(response){
                if(response.success){
                    html = '';
                    prices = '';
                    files = '';
                    var total = 0;

                    $('.order-items').empty();
                    $('#languageForm')[0].reset();
                    $("#modal-edit-language").modal('hide');

                    for(var i=0;i<response.files.length;i++){

                        fromLanguage = response.files[i].from_language;
                        toLanguage = response.files[i].to_language;
                        fromLanguage = (fromLanguage == null) ? "" : fromLanguage;
                        toLanguage = (toLanguage == null) ? "" : toLanguage;
                        fileSelected = response.selectedFiles.includes(response.files[i].request_id);

                        files += response.files[i].name+'*';
                        files += response.files[i].newName+'*';
                        files += response.files[i].fileSize+'*';
                        files += response.files[i].ext+'*';
                        files += response.files[i].numberWords+'*';
                        files += response.files[i].mode+'*';
                        files += response.files[i].price+'*';
                        files += response.files[i].opt+'*';
                        files += response.files[i].pkg+'*';
                        files += fromLanguage+'*';
                        files += toLanguage+'*';
                        files += response.files[i].file_uploaded_via_url+'*';
                        files += '~';

                        pkg = response.files[i].pkg;
                        opt = response.files[i].opt;
                        mode = response.files[i].mode;

                        if (fileSelected == true) {
                            fileSelected = "checked";
                        }

                        if(pkg==1){
                            pkg = 'flexible';
                        }else if(pkg==2){
                            pkg = 'standard';
                        }else if(pkg==3){
                            pkg = 'express';
                        }

                        if(mode==1){
                            mode = 'Transcription';
                            wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                        }else if(mode==2){
                            mode = 'Translation';
                            wordOrSeconds = response.files[i].seconds + " <small>(Min)</small>";
                        }else if(mode==3){
                            mode = 'Documents';
                            wordOrSeconds = response.files[i].numberWords + " <small>(words)</small>";
                        }


                        if(opt==1){
                            opt = 'None';
                            extra = 0;
                        }else if(opt==2){
                            opt = 'verbatim';
                            extra = 0.25;
                        }else if(opt==3){
                            opt = 'timestamp';
                            extra = 0.25;
                        }

                        total += extra;

                        html += '<tr>';
                        html += '<td><input type="checkbox" name="fIndex[]" class="fIndex" request_id="'+response.files[i].request_id+'" value="'+i+'" '+fileSelected+'></td>';
                        html += '<td>'+response.files[i].name+'<br><small style="color:red">'+mode+'&nbsp;</small><small style="color:blue">'+pkg+'&nbsp;</small><small style="color:green;display:none;">'+opt+'&nbsp;</small><br><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-edit-language" onClick="EditLanguage('+i+', \''+response.files[i].newName+'\', \''+fromLanguage+'\', \''+toLanguage+'\', '+response.files[i].mode+')" >Edit Language &nbsp;</a></td>';
                        html += '<td>'+(fromLanguage != "" ? fromLanguage : "---")+'</td>';
                        html += '<td>'+(toLanguage != "" ? toLanguage : "---")+'</td>';
                        html += '<td>'+response.files[i].numberWords+'</td>';
                        html += '<td>'+ response.files[i].charge +" X "+ wordOrSeconds +'</td>';
                        html += '<td>'+ (parseFloat(response.files[i].price)+extra).toFixed(2) +'</td>';
                        html += '<td><i style="cursor:pointer;color:red;" onclick="deleteItem(\''+response.files[i].newName+'\',\''+i+'\')" class="glyphicon glyphicon-trash"></i></td>';
                        html += '</tr>';
                    }
                    $('.order-items').append(html);
                    $('.gr-total').text('Total $'+(parseFloat(total)+parseFloat(response.total)).toFixed(2) );
                    $('#orderAmount').val((parseFloat(total)+parseFloat(response.total)).toFixed(2));
                    $('#orderFiles').val(files);
                    $('#listTotal').text('$'+(parseFloat(total)+parseFloat(response.total)).toFixed(2));

                    $('#file').val('');

                }else{
                    alert('Something went wrong please try again...');
                }
            }
        });
    });

    function UploadFile(formData) {
        request_id = new Date().getTime();
        var requestAbort = false;

        formData.append('request_id', request_id);

        if (formData.has('file')) {
            files = $("#file").prop("files")
            var filesname = [];
            var validFiles = true;
            $.each(files, function (i, file) {
                filesname.push(file.name)
                var ext = file.name.replace(/^.*\./, '').toLowerCase();

                if($("#transcription").is(":checked")){
                    formData.append('mode',1);
                    if(ext=="mp4" || ext=="avi" || ext=="ogg" || ext=="webm" || ext=="mp3" || ext=="wav" || ext=="wma" || ext=="aiff" || ext=="pcm" || ext=="flac"){}else{alert("To upload document please select document tab.");$('#file').val(''); validFiles= false; return false;}
                }else if($("#translation").is(":checked")){
                    formData.append('mode',2);
                    if(ext=="mp4" || ext=="avi" || ext=="ogg" || ext=="webm" || ext=="mp3" || ext=="wav" || ext=="wma" || ext=="aiff" || ext=="pcm" || ext=="flac"){}else{alert("To upload document please select document tab.");$('#file').val(''); validFiles= false; return false;}
                }else if($("#documents").is(":checked")){
                    formData.append('mode',3);
                    if(ext=="pdf" || ext=="doc" || ext=="docx"){}else{alert("To upload video please select TRANSCRIPTION or TRANSLATION tab.");$('#file').val(''); validFiles= false; return false;}
                }
            });

            if (!validFiles) {
                return;
            }
        } else if(formData.has('file_url')) {
            var file_url = formData.get('file_url');
            var video_from = "";

            file_url.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);

            if (RegExp.$3.indexOf('youtu') > -1) {
                video_from = "youtube";
            } else if (RegExp.$3.indexOf('vimeo') > -1) {
                video_from = "vimeo";
            }

            if (video_from == "youtube" || video_from == "vimeo") {
                if($("#transcription").is(":checked")){
                    formData.append('mode',1);
                    formData.delete('to_language');
                }else if($("#translation").is(":checked")){
                    formData.append('mode',2);
                }else if($("#documents").is(":checked")){
                    alert("To upload video please select TRANSCRIPTION or TRANSLATION tab.");
                    return;
                }
            } else {
                var basename = file_url.split('/').reverse()[0];
                var ext = basename.split('.').reverse()[0];

                if($("#transcription").is(":checked")){
                    formData.append('mode',1);
                    if(ext=="mp4" || ext=="avi" || ext=="ogg" || ext=="webm" || ext=="mp3" || ext=="wav" || ext=="wma" || ext=="aiff" || ext=="pcm" || ext=="flac"){}else{alert("To upload document please select document tab.");return;}
                }else if($("#translation").is(":checked")){
                    formData.append('mode',2);
                    if(ext=="mp4" || ext=="avi" || ext=="ogg" || ext=="webm" || ext=="mp3" || ext=="wav" || ext=="wma" || ext=="aiff" || ext=="pcm" || ext=="flac"){}else{alert("To upload document please select document tab.");return;}
                }else if($("#documents").is(":checked")){
                    formData.append('mode',3);
                    if(ext=="pdf" || ext=="doc" || ext=="docx"){}else{alert("To upload video please select TRANSCRIPTION or TRANSLATION tab.");return;}
                }
            }
        }

        if($("#price1").is(":checked")){
            formData.append('pkg',1);
        }else if($("#price2").is(":checked")){
            formData.append('pkg',2);
        }else if($("#price3").is(":checked")){
            formData.append('pkg',3);
        }

        if($("#none").is(":checked")){
            formData.append('opt',1);
        }else if($("#verbatim").is(":checked")){
            formData.append('opt',2);
        }else if($("#timestamp").is(":checked")){
            formData.append('opt',3);
        }

        $(".fIndex:checked").each(function() {
            formData.append('selectedFiles[]',$(this).attr('request_id'));
        });

        $('#file').addClass('dis');
        $('#checkout').addClass('dis');
        $('#wait').attr('style','');

        if (formData.has('file')) {

            var nextProgress = request_id;

            var progressBar = '<div class="progress_'+ nextProgress +'">';
            $.each(filesname, function (i, name) {
                progressBar +='<label>'+ name +'</label><br>';
            });
            progressBar += '<div class="row">';
            progressBar += '<div class="col-sm-11 col-md-11" style="text-align: right;"><label class="loaded_'+ nextProgress +'"></label> / <label class="total_'+ nextProgress +'"></label></div>';
            progressBar += '</div>';
            progressBar += '<div class="progress col-sm-11" style="padding:0;">';
            progressBar += '<div class="progress-bar bar_'+ nextProgress +'" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="">0</div>';
            progressBar += '</div>';
            progressBar += '<div class="col-sm-1 cancel_'+ nextProgress +'" style="padding-right:0; text-align:end; font-size: 20px;">';
            progressBar += '<i style="cursor:pointer;color:red;" class="glyphicon glyphicon-remove-sign"></i>';
            progressBar += '</div></div>';

            $(".progress_list").append(progressBar);
        }

        jQuery.ajax({
            url: "{{  url('user/file-upload') }}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            beforeSend: function() {
                $(".add_url").prop('disabled', true);
                if (formData.has('file_url')) {
                    $('.loader').show();
                }
            },
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var loaded = evt.loaded;
                        var total = evt.total;
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = Math.round(parseInt(percentComplete * 100));

                        var loadedSize = formatBytes(loaded/2);
                        var totalSize = formatBytes(total/2);

                        $(".loaded_"+nextProgress).text(loadedSize);
                        $(".total_"+nextProgress).text(totalSize);
                        $(".bar_"+nextProgress).attr("aria-valuenow", percentComplete).css('width', percentComplete+'%').text(percentComplete + '%')

                        if (percentComplete === 100) {
                            $(".bar_"+nextProgress).text('Uploading to server...');
                        }
                    }
                }, false);

                $('.cancel_'+nextProgress).click(function() {
                    requestAbort = true;
                    xhr.abort();
                    $(".bar_"+nextProgress).css({'width': '100%', 'background-color': 'red'}).text("Canceled");
                    $(".cancel_"+nextProgress).remove();
                    abortInterval = setInterval(function() {
                        $(".progress_"+nextProgress).remove();
                        clearInterval(abortInterval);
                    },3000);
                });

                return xhr;
            },
            success: function (response) {

                if(response.success){
                    $(".cancel_"+nextProgress).remove();

                    html = '';
                    prices = '';
                    files = '';
                    var total = 0;
                    var extra = 0;
                    var wordOrSeconds;
                    $('.order-items').empty();

                    $.each(response.files, function( key, fileData ) {
                        fromLanguage = fileData.from_language;
                        toLanguage = fileData.to_language;
                        fromLanguage = (fromLanguage == null) ? "" : fromLanguage;
                        toLanguage = (toLanguage == null) ? "" : toLanguage;
                        fileSelected = response.selectedFiles.includes(fileData.request_id);

                        files += fileData.name+'*';
                        files += fileData.newName+'*';
                        files += fileData.fileSize+'*';
                        files += fileData.ext+'*';
                        files += fileData.numberWords+'*';
                        files += fileData.mode+'*';
                        files += fileData.price+'*';
                        files += fileData.opt+'*';
                        files += fileData.pkg+'*';
                        files += fromLanguage+'*';
                        files += toLanguage+'*';
                        files += fileData.file_uploaded_via_url+'*';
                        files += '~';

                        pkg = fileData.pkg;
                        opt = fileData.opt;
                        mode = fileData.mode;

                        if (fileSelected == true) {
                            fileSelected = "checked";
                        }

                        if(pkg==1){
                            pkg = 'flexible';
                        }else if(pkg==2){
                            pkg = 'standard';
                        }else if(pkg==3){
                            pkg = 'express';
                        }

                        if(mode==1){
                            mode = 'Transcription';
                            wordOrSeconds = fileData.seconds + " <small>(Min)</small>";
                        }else if(mode==2){
                            mode = 'Translation';
                            wordOrSeconds = fileData.seconds + " <small>(Min)</small>";
                        }else if(mode==3){
                            mode = 'Documents';
                            wordOrSeconds = fileData.numberWords + " <small>(words)</small>";
                        }

                        if(opt==1){
                            opt = 'None';
                            extra = 0;
                        }else if(opt==2){
                            opt = 'verbatim';
                            extra = 0.25;
                        }else if(opt==3){
                            opt = 'timestamp';
                            extra = 0.25;
                        }

                        total += extra;

                        html += '<tr>';
                        html += '<td><input type="checkbox" name="fIndex[]" class="fIndex" request_id="'+fileData.request_id+'" value="'+key+'" '+fileSelected+'></td>';
                        html += '<td>'+fileData.name+'<br><small style="color:red">'+mode+'&nbsp;</small><small style="color:blue">'+pkg+'&nbsp;</small><small style="color:green;display:none;">'+opt+'&nbsp;</small><br><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-edit-language" onClick="EditLanguage('+key+', \''+fileData.newName+'\', \''+fromLanguage+'\', \''+toLanguage+'\', '+fileData.mode+')" >Edit Language &nbsp;</a></td>';

                        html += '<td>'+(fromLanguage != "" ? fromLanguage : "---")+'</td>';
                        html += '<td>'+(toLanguage != "" ? toLanguage : "---")+'</td>';
                        html += '<td>'+fileData.numberWords+'</td>';
                        html += '<td>'+ fileData.charge +" X "+ wordOrSeconds +'</td>';
                        html += '<td>'+ (parseFloat(fileData.price)+extra).toFixed(2) +'</td>';
                        html += '<td><i style="cursor:pointer;color:red;" onclick="deleteItem(\''+fileData.newName+'\',\''+key+'\')" class="glyphicon glyphicon-trash"></i></td>';
                        html += '</tr>';
                    });

                    $('.order-items').append(html);
                    $('.gr-total').css('display', 'block').text('Total $'+(parseFloat(total)+parseFloat(response.total)).toFixed(2) );
                    $('#orderAmount').val((parseFloat(total)+parseFloat(response.total)).toFixed(2));
                    $('#orderFiles').val(files);
                    $('#listTotal').text('$'+(parseFloat(total)+parseFloat(response.total)).toFixed(2));
                    $('#file').removeClass('dis');
                    $('#checkout').removeClass('dis');
                    $(".bar_"+nextProgress).text('Uploaded!');
                    $('#from_lang').val(null).change();
                    $('#to_lang').val(null).change();
                    $("#modal-add-url").modal('hide');

                }else{
                    $('#file').removeClass('dis');
                    $('#checkout').removeClass('dis');
                    $('#wait').attr('style','display:none');
                    alert('Something went wrong please try again...');
                    $("#modal-add-url").modal('hide');
                }
            },
            error: function (jqXHR, exception) {

                $('#file').removeClass('dis');
                $('#checkout').removeClass('dis');
                $('#wait').attr('style','display:none');
                $("#modal-add-url").modal('hide');

                if (requestAbort) {
                    return;
                }
                alert('Something went wrong please try again...');
            },
            complete: function(jqXHR, exception){
                setInterval(function(){ $(".progress_"+nextProgress).remove(); },3000);
                $('#file').val('');
                $('.loader').hide();
            }
        });
    }

    $('.add_url').click(function(){
        var fromLanguage = $("#from_lang").val();
        var toLanguage = $("#to_lang").val();
        var file_url = $("#file_url").val().trim();

        var isTranscription = $("#transcription").is(":checked");
        var isTranslation = $("#translation").is(":checked");
        var isDocuments = $("#documents").is(":checked");

        dont_know_language = $("#dont_know_language").is(":checked");
        if (!dont_know_language) {

            if (isTranscription) {
                from_lang = $('#from_lang').val();
                if (from_lang == null) {
                    alert("Please enter Transcription Language.");
                    return;
                }
            }
        }

        if(isTranslation || isDocuments) {
            from_lang = $('#from_lang').val();
            to_lang = $('#to_lang').val();
            if (from_lang == null || to_lang == null) {
                alert("Please enter from-language and to-language.");
                return;
            }
        }

        if (file_url == "" || file_url == null) {
            alert("Please enter url..");
            return;
        }

        var formData = new FormData();
        formData.append('_token',"{{ csrf_token() }}");
        formData.append('from_language', fromLanguage);
        formData.append('to_language', toLanguage);
        formData.append('file_url', file_url);

        UploadFile(formData);
    });

    $(document).on('keyup focusout click', '#file_url', function () {
        txtVal = $(this).val().trim();
        if (txtVal.length > 0) {
            $(".add_url").prop('disabled', false);
        } else {
            $(".add_url").prop('disabled', true);
        }
    });

    $('#modal-add-url').on('show.bs.modal', function () {
        $("#file_url").val('');
        $(".add_url").prop('disabled', true);
    })

    function formatBytes(bytes,decimals) {
        if(bytes == 0) return '0 Bytes';
        var k = 1024,
            dm = decimals || 2,
            sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
            i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
    }

</script>

@endsection