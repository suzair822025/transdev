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
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/01.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Get A Free Quote</h1>
        <p class="white-text">How to get in touch – Contact & Feedback….</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

@if(Session::has('successMessage'))
<div class="alert alert-success alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ Session::get('successMessage') }}
</div>
@endif

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container">
        <section id="contact" class="container my-5">
            <form action="{{ url('get-quote') }}" method="post" id="get-quote-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <p>I am a </p>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Customer" checked>Customer(Individual)</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Business">Business Customer</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Translator">Translator</label>
                    </div>
                </div>

                <h3>Personal Information</h3>

                <div class="row">

                </div>
                <div class="row">
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
                        <p> <strong>You want to</strong></p>
                        <div class="radio">
                            <label><input type="radio" name="option" value="translate">Translate</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="option" value="transcribe">Transcribe</label>
                        </div>
                        <small class="text-danger">{{ $errors->first('option') }}</small>
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
                        <hr>
                        <div class="progress_list">
                        </div>

                        <div class="row my-4">
                            <div class="col-sm-4 col-md-5 col-lg-4">
                                <a href="javascript:void(0);" class="btn-theme btn-theme-sm text-uppercase btn-md" data-toggle="modal" data-target="#modal-add-url">Add URL</a>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input type="file" id="fileUpload" name="quoteFile[]" style="display:none" multiple />
                                <button class="btn-theme btn-theme-sm text-uppercase" id="OpenfileUpload">Upload Files</button>
                                <small class="text-danger">{{ $errors->first('quoteFile') }}</small>
                            </div>
                        </div>
                        <!-- <label class="ml-3"><input type="checkbox" value="" id="disable-upload"> I don't have anything yet</label> 
                        <br><br> -->
                        <strong>Upload more files? Click the "Upload a file" button again!</strong>
                    </div>

                    <div class="col-md-6">
                        <hr>
                        <div class="row1" style="font-size: 12px;">
                            <table style="width:100%" id="file_list">
                                <thead>
                                    <tr>
                                        <th style="display:none"></th>
                                        <th width="55%">Filename/ URL</th>
                                        <th width="20%">Duration/Word</th>
                                        <th width="20%">Size</th>
                                        <th width="5%"></th>
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
                        <div class="form-group">
                            <label for ="description"> Comments</label>
                            <textarea name="comments" class="form-control message" id="description" placeholder="Please add any comments or additional instructions for the translator or project manager. "></textarea>
                            <small class="text-danger">{{ $errors->first('comments') }}</small>
                        </div>
                        <div clsss="row">
                            <button type="submit" class="btn-theme btn-theme-sm text-uppercase submit">Send</button>
                        </div>
                    </div>
                </div>

            </form>
        </section>

    </div>
</div>
<!-- End Contact List -->

<!-- Google Map -->
<div id="map" class="map height-400"></div>


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
                            html += '<td>'+file.fileName+'</td>';
                            html += '<td>'+file.durOrWords+'</td>';
                            html += '<td>'+formatBytes(file.fileSize)+'</td>';
                            html += '<td><i style="cursor:pointer;color:red;" file_id='+file.id+' class="glyphicon glyphicon-trash deleteFile"></i></td>';
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
    });
</script>
@stop