@extends('layouts.app')

@section('style')
<link href="{{ asset('/assets/css/basic.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<style>
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
tbody td {
    padding: 1%;
    border-bottom: solid #cacaca;
    word-wrap: break-word;
    font-size: 14px;
    vertical-align: center;
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
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/01-landing.webp') }}">
    <div class="parallax-content container innerpage landingpage" style="padding-top: 131px;">
        <div class="col-md-6">
            <h1 class="carousel-title" style="font-size: 4.5rem; font-weight: bold;">Translation/Transcription</h1>
            <p class="white-text">Leebon provides professional industrial, medical, legal, certified and technical translations, transcription, localization, and interpreting services for the world. If you need a professional human transcription/translation, please contact us. We are always open</p>   
            <div class="col-sm-12 clearfix"><span class="pull-left cattitle-quote-landing mx-4" style="margin-top: 1.5rem">For as low as</span> <span class="white-text price-quote-landing"><strong>$0.08</strong>/word</span> </div>
            <div class="clearfix"></div>
            <div class="typewrite white-text my-5 clearfix ml-5" data-period="1000" data-type='[ "Speedy Delivery", "Guaranteed Top Quality", "Powerful Technology", "Support and Customer Service"]'>
                <span class="wrap white-text" style="color: #fff;"></span>
           </div>
        </div>
        <div class="col-md-6 white-text">
            <form action="{{ url('translation-landing') }}" method="post" id="trans-quote-form" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <h1 class="carousel-title" style=" font-weight: bold;font-size: 4.5rem; margin-left: 1.2rem">Request A Quote</h1>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername">First Name</label>
                            <input type="text" name="first_name" class="form-control alphaonly" id="" placeholder="First Name">
                            <small class="text-danger">{{ $errors->first('first_name') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control alphaonly" placeholder="Last Name">
                            <small class="text-danger">{{ $errors->first('last_name') }}</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="tel" name="phone" class="form-control numbersonly" placeholder="Phone">
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="from_lang">Select Language *</label>
                            <select class="form-control select2" name="from_language_id">
                                <option hidden selected disabled>Select</option>z
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">{{ $errors->first('from_language_id') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="from_lang">Select Target Language *</label>
                            <select class="form-control select2" name="to_language_id">
                                <option hidden selected disabled>Select</option>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">{{ $errors->first('to_language_id') }}</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p> <strong>You want to</strong></p>
                        <div class="radio">
                            <label><input type="radio" name="option" value="translate">Translate</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="option" value="transcribe">Transcribe</label>
                        </div>
                        <small class="text-danger">{{ $errors->first('option') }}</small>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Comments</label>
                            <textarea name="comments" class="form-control message" id="description" placeholder="Please add any comments or additional instructions for the translator or project manager." style="height: 80px;"></textarea>
                            <!-- <small class="text-danger">{{ $errors->first('comments') }}</small> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="progress_list">
                        </div>

                        <div class="row my-2">
                            <div class="col-sm-5 col-md-5 col-lg-5">
                                <a href="javascript:;" class="btn-theme btn-theme-sm text-uppercase btn-md" data-toggle="modal" data-target="#modal-add-url" style="width: 100%; padding: 10px 10px; background: #3ec2f9; color: #fff;">Add URL</a>
                            </div>
                            <div class="col-md-5 col-lg-7">
                                <input type="file" id="fileUpload" name="quoteFile[]" style="display:none" multiple />
                                <button class="btn-theme text-uppercase" id="OpenfileUpload" style="padding: 10px 10px;  background: #3ec2f9; color: #fff; width:100%;">Upload Files</button>
                                <small class="text-danger">{{ $errors->first('quoteFile') }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <hr>
                        <div class="row1" style="font-size: 12px;">
                            <table style="width:100%" id="file_list">
                                <thead>
                                    <tr>
                                        <th style="display:none"></th>
                                        <th colspan="4">Filename/ URL</th>
                                    </tr>
                                </thead>
                                <tbody class="row order-items">
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="row my-3">
                    <div class="col-md-6">
                        <div class="row">
                             <label class="ml-3"><input type="checkbox" value="Please call me" id="req-call" name="requestACall"> Request A Call</label> 
                        </div>
                        <div clsss="row">
                            <button type="submit" class="btn-theme text-uppercase submit" style="padding:10px; min-width: 96px; line-height: 0.9;  background: #3ec2f9; color: #fff;">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--========== PARALLAX ==========-->

@if(Session::has('successMessage'))
<div class="alert alert-success alert-dismissible text-center landingpage-succeswsmsg" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ Session::get('successMessage') }}
</div>
@endif

<!--========== PAGE LAYOUT ==========-->

<div class="section-seperator">
    <div class="content-lg container">
        <section class="container mb-5">
            <div id="Translation">
                <p>A wide range of leading corporations and institutions of all sizes depend on Leebon to translate their important document, audio/video files and other materials. They continually work with us because of our reliability, accuracy, professional standards and timeliness. We work on any written material- whether it is legal, medical or technical- and translate it into or from over 100 languages. You may be astounded at how easy it is to work with us.</p>
            </div> <!--   ##Translation   -->
        </section>
    </div>
</div>

<section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/02-landing.webp') }}">
    <div class="parallax-content container innerpage landingpage" style="padding-top: 69px;">
        <div class="row my-5">
            <span style="font-size: 4.5rem; font-weight: bold; display: block; text-align: center; color: #fff;">Types of Translations We Offer</span>
            <div class="clearfix"></div>
            <span style="font-size: 3rem; display: block; text-align: center; margin-bottom: 30px; line-height: 1; color: #fff;">Best Translation Services</span>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <img class="img-responsive" src="{{ asset('/assets/img/gen.png') }}" alt="Our Office">
                    </div>
                    <div class="col-md-7"><h2 class="h2" style="color: #fff;">General</h2></div>
                </div>
                <div class="row my-4">
                    <p class="col-sm-12">A specialized team of linguists will be assigned to your transcription projects based on the requested language and subject matter. Linguists are always thoroughly vetted and sign NDAs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <img class="img-responsive" src="{{ asset('/assets/img/leg.png') }}" alt="Our Office">
                    </div>
                    <div class="col-md-7"><h2 class="h2" style="color: #fff;">Legal</h2></div>
                </div>
                <div class="row my-4">
                    <p class="col-sm-12">Courts are the final hope for people who wish to sort things out in a justifying and legal manner.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <img class="img-responsive" src="{{ asset('/assets/img/aca.png') }}" alt="Our Office">
                    </div>
                    <div class="col-md-7"><h2 class="h2" style="color: #fff;">Academic</h2></div>
                </div>
                <div class="row my-4">
                    <p class="col-sm-12">Academic transcription makes research studies and scholastic records, such as Lectures and transcript of records easily accessible for all.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <img class="img-responsive" src="{{ asset('/assets/img/med.png') }}" alt="Our Office">
                    </div>
                    <div class="col-md-7"><h2 class="h2" style="color: #fff;">Medical</h2></div>
                </div>
                <div class="row my-4">
                    <p class="col-sm-12">Leebon transcribe very accurately and consistently throughout the projects, such as marketing or clinical, regulatory and technical recordings, training materials for healthcare, medical lectures and other pharmaceutical audios/videos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <img class="img-responsive" src="{{ asset('/assets/img/aca.png') }}" alt="Our Office">
                    </div>
                    <div class="col-md-7"><h2 class="h2" style="color: #fff;">Financial</h2></div>
                </div>
                <div class="row">
                    <p class="col-sm-12 my-4">Leebon understands the specific regulatory and confidentiality of financial documents. Therefore, we always work with trustable and contracted linguists.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <img class="img-responsive" src="{{ asset('/assets/img/aca.png') }}" alt="Our Office">
                    </div>
                    <div class="col-md-7"><h2 class="h2" style="color: #fff;">Business</h2></div>
                </div>
                <div class="row">
                    <p class="col-sm-12">Your business deserves only the best that is why our unbeatable business transcription is right for you.</p>
                </div>
            </div>
        </div>
</section>
<section class="block-landingbottom-email">
    <div class="clearfix"></div>
        <div class="content-lg container" style="padding-top: 60px;">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h3 class="h3 mb-0" style="font-size: 5rem; font-weight: bold;">Have A Large Project?</h3>
                    <p style="font-size: 3rem; color: #ffff;">Speak to one of our project managers.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1 white-text">
                    <span class="fa fa-phone">
                        <img class="" src="{{ asset('/assets/img/ph-icon.webp') }}" alt="Our Office" style="width: 15%;">
                    </span><span style="font-size: 4.5rem;color: #fff;padding: 0.5rem 2rem;">Call Today</span>
                    <div class="clearfix"></div>
                    <a href="tel:1866 288 7020"><span class="topphone-text" style="color: #fff;line-height: 7rem; font-size: 43px; font-weight: bold"> (1) 866 288 7020</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="row mt-5">
                    <form action="{{ url('translation-landing/query') }}" method="post" id="trans-signup-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name_trans_signup" placeholder="Name">
                                <small class="text-danger">{{ $errors->first('name_trans_signup') }}</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email_trans_signup" placeholder="Email">
                                <small class="text-danger">{{ $errors->first('email_trans_signup') }}</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="tel" name="phone_trans_signup" class="form-control numbersonly" placeholder="Phone">
                                <small class="text-danger">{{ $errors->first('phone_trans_signup') }}</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn-theme text-uppercase submit translandsignup" style="padding:10px; min-width: 100%; line-height: 0.9;  background: #3ec2f9; color: #fff;">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


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
                        <label for="url">Url</label>
                        <input type="text" class="form-control file_url" id="file_url" name="file_url" placeholder="Enter File Url">
                    </div>
                </form>
                <div style="text-align: center;">
                    <input type="button" value="Add" onclick="" class="btn-theme btn-theme-sm footer-btn add_url" >
                </div>
            </div>
            
          </div>
        </div>
      </div>
    
    <!--========== modal-add-url ==========-->


<!--========== END PAGE LAYOUT ==========-->
@stop

@section('scripts')
<!-- <script src="{{ asset('resources/assets/js/components/gmap.min.js') }}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script> -->
<script src="{{ asset('/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap-formavalidation.js') }}"></script>
<script src="{{ asset('/assets/js/validation-forms.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.select2').select2();
        $('#fileUpload').change(function(){
            var files = this.files;
            var selected_file = $(this).val();
            
            if (selected_file.length <= 0) {
                return;
            }

            var formData = new FormData();
            var valid = true;
            $.each(files, function (i, file) {
                var ext = file.name.replace(/^.*\./, '').toLowerCase();
                var extension = ['mp4','avi','ogg','webm','pdf','doc','docx','mp3','wav','wma','aiff','pcm','flac']
                if(jQuery.inArray(ext, extension) == -1){
                    alert('Please select valid file having extension mp4,avi,ogg,.wav,mp3,wma,aiff,pcm,flac,webm,pdf,doc & docx.');
                    valid = false;
                    return;
                }
                formData.append('files[]',file, file.name);
            });

            if (valid) {
                UploadFile(formData);
            }
        });
        $(".add_url").click(function(){

            var file_url = $("#file_url").val().trim();
            
            if (file_url == "" || file_url == null) {
                alert("Please enter url..");
                return;
            }
            
            var formData = new FormData();
            formData.append('file_url', file_url);

            UploadFile(formData);
        });

        function UploadFile(formData) {
            request_id = new Date().getTime();
            var requestAbort = false;
            
            formData.append('request_id', request_id);
            formData.append('_token',"{{ csrf_token() }}");

            if (formData.has('files[]')) {
                files = $("#fileUpload").prop("files")
                var filesname = [];
                $.each(files, function (i, file) {
                    filesname.push(file.name)
                });

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

            } else if(formData.has('file_url')) {
                var file_url = formData.get('file_url');
                var video_from = "";

                file_url.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);

                if (RegExp.$3.indexOf('youtu') > -1) {
                    video_from = "youtube";
                } else if (RegExp.$3.indexOf('vimeo') > -1) {
                    video_from = "vimeo";
                }
                
                if (video_from != "youtube" && video_from != "vimeo") {
                    var basename = file_url.split('/').reverse()[0];
                    var ext = basename.split('.').reverse()[0];

                    var extension = ['mp4','avi','ogg','webm','pdf','doc','docx','mp3','wav','wma','aiff','pcm','flac']
                    if(jQuery.inArray(ext, extension) == -1){
                        alert('abc Please enter valid file url..');
                        return;
                    }
                }
            }

            jQuery.ajax({
                url: "{{  url('upload_quote_file') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
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
                                                
                        var loadedSize = formatBytes(loaded);
                        var totalSize = formatBytes(total);

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
                        files = response.files;

                        files.forEach((file,key) => {                            
                            html += '<tr>';
                            html += '<td style="display:none"><input type="text" value='+file.id+' name="files_id[]"></td>'
                            html += '<td colspan="3">'+file.fileName+'</td>';
                            // html += '<td>'+file.durOrWords+'</td>';
                            // html += '<td>'+formatBytes(file.fileSize)+'</td>';
                            html += '<td class="text-right"><i style="cursor:pointer;color:red;" file_id='+file.id+' class="glyphicon glyphicon-trash deleteFile"></i></td>';
                            html += '</tr>';
                        });

                        $('.order-items').append(html);
                        $(".bar_"+nextProgress).text('Uploaded!');
                        $("#modal-add-url").modal('hide');
                        
                        setInterval(function(){ $(".progress_"+nextProgress).remove(); },3000);  

                    }else{
                        alert('Somthing went wrong please try again...');
                        $("#modal-add-url").modal('hide');
                    }
                },
                error: function (jqXHR, exception) {
                    $("#modal-add-url").modal('hide');
                    if (requestAbort) {
                        return;
                    }
                    alert('Somthing went wrong please try again...');
                },
                complete: function(){
                    $('#fileUpload').val('');
                    $('.loader').hide();
                }
            });
        }

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

        $(document).on('click', '.deleteFile', function () {

            var x = confirm('Are you sure you want to delete this file?');
            if (x) {
                fileId = $(this).attr('file_id');
                var tr = $(this).closest("tr");
                
                $.ajax({
                    url: "{{ url('deleteQuoteFile') }}/"+fileId,
                    method: 'POST',
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                    success: function (response) {
                        if (response.code == 200) {
                            tr.remove();
                        } else {
                            alert("Something went wrong please try again");
                        }
                    },
                    error: function (jqXHR, exception) {
                    }
                });
            }            
        });

        function formatBytes(bytes,decimals) {
            if(bytes == 0) return '0 Bytes';
            var k = 1024,
                dm = decimals || 2,
                sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
                i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        }




        $(document).on('click', '.translandsignup', function() {

            var formData = new FormData();
            var valid = true;

            if (valid) {
                var formData = new FormData($('#trans-signup-form')[0]);
                // formData.append('action_type', action);
                // formData.append('modification_id', modification_id);
                $.ajax({
                    url: "{{ url('translation-landing/query') }}/",
                    type: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $('.loader').show();
                    },
                    success: function(result){
                        if(result.code == 200)
                        {
                            alert('Done');
                        }
                        else 
                        {
                            alert("Something went wrong please try again");
                        }
                    },
                    complete: function(){
                        $('.loader').hide();
                        $('#order_history_modal').modal('toggle');
                    }
                });
            }
        });




    });


    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap white-text">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff; font-size:2.0rem; font-weight:bold;}";
        document.body.appendChild(css);
    };
</script>
@stop