@extends('layouts.app')

@section('content')
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/01.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Pricing</h1>
        <p class="white-text">&nbsp;</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container space20px">
        <h3>Transcription Audio/ Video</h3>
        <table class="table table-striped">
            <tr>
                <td style="width: 33%">Flexible </td>
                <td>5-8 Days </td>
                <td>$ 0.75 / Min </td>
            </tr>
            <tr>
                <td>Standard</td>
                <td style="width: 33%;">2-5 Days</td>
                <td>$1 / Min</td>
            </tr>
            <tr>
                <td>Express </td>
                <td>24 Hours</td>
                <td>$1.5 / Min</td>
            </tr>
        </table>

        <h3>Translation Audio/ Video</h3>
        <table class="table table-striped">
            <tr>
                <td>Flexible </td>
                <td>5-8 Days </td>
                <td>$2 / Min </td>
            </tr>
            <tr>
                <td>Standard</td>
                <td>2-5 Days</td>
                <td>$2.5/ Min</td>
            </tr>
            <tr>
                <td>Express </td>
                <td>24 Hours</td>
                <td>$4 / Min</td>
            </tr>
        </table>

        <h3>Documents</h3>
        <table class="table table-striped">
            <tr>
                <td style="width: 33%;">Flexible </td>
                <td style="width: 33%">5-8 Days </td>
                <td>$0.08 / Word </td>
            </tr>
            <tr>
                <td>Standard</td>
                <td>2-5 Days</td>
                <td>$2.5/ Min</td>
            </tr>
            <tr>
                <td>Express </td>
                <td>24 Hours</td>
                <td>$4 / Min</td>
            </tr>
        </table>

    </div>
</div>
<!-- End Contact List -->

<!-- Google Map -->

<!--========== END PAGE LAYOUT ==========-->
@stop