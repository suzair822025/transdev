@extends('layouts.app')
@section('style')
@endsection
@section('content')
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset("/assets/img/1920x1080/01.jpg") }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">My Account</h1><p class="white-text">Below mention are your recent orders...</p>
    </div>
</div>
<style>
.myorder_table th,.myorder_table td,.myorder_table td li{font-family:calibri;font-size:10px;}
</style>
<div class="section-seperator">
    <div class="content-lg container space20px">
          <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Your Orders</h2>
                    <p class="resultMessage text-center"></p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover myorder_table">
                                <thead>
                                <tr>
                                    <th width="5%">Order id</th>
                                    <th width="10%">Order Date</th>
                                    <th>Payment Status</th>
                                    <th>Files</th>
                                    <th width="15%">Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($orders->count())
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{ $order->orderDateTime }}</td>
                                            <td>Done</td>
                                            <td>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>File Name</th>
                                                        <th>Pck. Type</th>
                                                        <th>Tab Type</th>
                                                        <th>Language</th>
                                                        <th>Expected Delivery Date</th>
                                                        @if ($order->orderStatus === 'completed')
                                                            <th class="text-center">Download</th>
                                                            <th class="text-center">Actions</th>
                                                            <th class="text-left">Comments</th>
                                                        @endif
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($order->files as $file)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ url('file/download')."/".$file->order_id."/original"}}" target="_blank"> {{ $file->fileName }} </a>
                                                            </td>
                                                            <td>{{ $file->package_type_info }}</td>
                                                            <td>{{ $file->tab_type_info }}</td>
                                                            <td>{{ $file->fromLanguage->name ?? '-' }} {{ $file->toLanguage->name ?? '' }}</td>
                                                            <td>{{ $file->expected_delivery_date ? $file->expected_delivery_date->format('l, F d, Y H:i A ') : 'unknown' }}</td>
                                                            @if ($order->orderStatus === 'completed')
                                                                <td class="text-center"><a href="{{ url('file/download')."/".$file->order_id."/".($file->file_history->last()->file ?? '') }}" target="_blank"><i class="fa fa-download"></i> </a> </td>
                                                                <td class="text-center"><a href='javascript:;' title='Send modification / issues.' orderId="{{ $file->order_id }}" fileId="{{ $file->id }}" id="modify" >Modification <br> Request</a> </td>
                                                                <td class="text-left">{{ $file->file_history->last()->comment ?? '' }}</td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>
                                                @if ($order->orderStatus == "completed")
                                                    Completed on <br>{{ $order->orderCompleteDate->format('l, F d, Y H:i A ') }}
                                                @else
                                                    In Process
                                                @endif
                                            </td>

                                            @if ($order->orderStatus === 'completed')
                                                <td>
                                                    <a class="btn-theme btn-theme-sm text-uppercase transparent-btn ml-5 orderstatus-btn" target='_blank' href='{{ url('download/invoice')."/".$file->order_id }}' title='Invoice'>Invoice</a>
                                                </td>
                                            @else
                                                <td> - </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6"><b>No orders found.</b></td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
  <div class="modal fade" id="modal_modify">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Send Modification Request</h4>
        </div>
        <div class="modal-body">
            <form id="modificationForm">
                <div class="form-group">
                    <label for="file_url">Message</label>
                    <textarea name="comment" class="form-control comment" rows="5" id="comment" placeholder="Please write something about issue or modification."></textarea>
                </div>
            </form>
            <div class="text-center">
                <input type="button" value="Send" id="send" class="btn-theme btn-theme-sm footer-btn" disabled >
            </div>
        </div>
      </div>
    </div>
</div>
<!--========== END PAGE LAYOUT ==========-->
@endsection
@section('scripts')
<script src="{{asset("/assets/js/bootstrap-formavalidation.js")}}"></script>
<script src="{{asset("/assets/js/validation-forms.js")}}"></script>
<script>
    $(document).ready(function(){$(document).on('click', '#modify', function() {var modal = $('#modal_modify');var orderId = $(this).attr('orderId');var fileId = $(this).attr('fileId');
            modal.find('#send').attr('orderId', orderId).attr('fileId', fileId); modal.modal('toggle');
        });
        $('#send').click(function() {var comment = $('#modificationForm').find('#comment').val()if (comment.length > 0) {var formData = new FormData($('#modificationForm')[0]);var orderId = $(this).attr('orderId');var fileId = $(this).attr('fileId');$.ajax({
                    url: "{{ url('modification') }}/" + orderId + "/" + fileId,type: "POST",data: formData,cache: false,contentType: false,processData: false,headers: {"X-CSRF-TOKEN":"{{ csrf_token() }}"},beforeSend: function() {$('.loader').show();},success: function(result){$('.resultMessage').text(result.message);
                        if (result.code == 200) {$('.resultMessage').css('color', 'green');} else {$('.resultMessage').css('color', 'red');
                        }},complete: function(xhr, textStatus){$('.loader').hide();$('#modal_modify').modal('toggle');if (textStatus != "success") {$('.resultMessage').css('color', 'red').text("Something went wrong, Please try again later");}setTimeout(function() {$('.resultMessage').text("");}, 3000);}});}});
        $("#comment").keyup(function() {var value = $(this).val()if (value.length > 0) {$('#send').prop('disabled', false);} else {$('#send').prop('disabled', true);}});
        $('#modal_modify').on('hidden.bs.modal', function () {$('#modificationForm')[0].reset();$('#modificationForm').find('.error').removeClass('error');$('#modificationForm').validate().resetForm();});});
</script>
@endsection