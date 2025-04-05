@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/services-header.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Audio/Video Transcription</h1>
        {{--<p class="white-text">From translation and transcription to summarization, categorization, subtitling, captioning, copywriting and voice over our multi-service platform can help with your content needs – all in one place</p>--}}
        <p class="white-text">Leebon provides professional industrial, medical, legal, certified and technical translations, transcription, localization, and interpreting services for the world. If you need a professional human transcription/translation, please contact us. We are always open</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Services -->
<div class="section-seperator">
<div class="content-lg container text-center space20px">
<div class="tab-content text-left px-4 py-6">
    <div id="Transcription">
        {{--<p>Transcription services basically involve the conversion of an audio feed to text. These services are often a necessary element involved with the production of any multilingual video/audio content. One the text is transcribed, it can be captioned directly for the hearing impaired or as a tool for those who do not understand the original audio feed's spoken version of the language or those who prefer to see subtitles in the source language to complement the audio stream. This transcribed material may also be used as the basis for subsequent translations into different languages. Leebon has teams dedicated to transcribing audio content for use in the final post-production and translation process.</p>--}}
        {{--<p>We offer fast, accurate and confidential transcription for audio, video, plain text and subtitles across 100+ languages, as well as add-ons including faster turnaround time, multilingual audio, timestamps and additional file types.</p>--}}
        <p>We offer fast, accurate and confidential transcription services for audio/video/plain text and subtitles across 100+ languages, as well as add-ons including faster turnaround time, multilingual audio and additional file types.</p>
        <p>Leebon is dedicated to delivering industry-leading, professionally transcribed documents. Reserve your transcription delivery schedule in advance based on your project's timeline. Have ongoing needs for super-fast turnaround? Talk to us and we'll work with you to develop a custom "Rush" schedule.</p>
        <p>You may be amazed by how quickly your audio and video transcription can be delivered!</p>
        <div class="sm-margin-b-50">
            <h2 class="h2">General</h2>
            <p>A specialized team of linguists will be assigned to your transcription projects based on the requested language and subject matter. Linguists are always thoroughly vetted and sign NDAs.</p>
        </div>
        <div class=" sm-margin-b-50">
            <h2 class="h2">Legal</h2>
            <p>Courts are the final hope for people who wish to sort things out in a justifying and legal manner. The judgment of any case depends on various factors & reasons. Documentation and evidence are the backbones of any legal pleas or cases. The transcription is done by a transcriber who has a legal background and legal transcription expertise. The content is then fully reviewed by a second legal transcriber.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Academic</h2>
            <p>Academic transcription makes research studies and scholastic records, such as Lectures and transcript of records easily accessible for all.</p>
        </div>
        <div class="clearfix"></div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Medical</h2>
            <p>Leebon transcribe very accurately and consistently throughout the projects, such as marketing or clinical, regulatory and technical recordings, training materials for healthcare, medical lectures and other pharmaceutical audios/videos.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Financial</h2>
            <p>Leebon understands the specific regulatory and confidentiality of financial documents. Therefore, we always work with trustable and contracted linguists.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Business</h2>
            <p>Your business deserves only the best that is why our unbeatable business transcription is right for you.</p>
        </div>
        <div class="clearfix"></div>
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h3 class="h3">Have A Large Project?</h3>
                    <p>Speak to one of our project managers.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('/assets/img/img_tab1_services.png') }}" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
    </div> <!--   ##Transcription   -->
</div>
</div>
</div>

<!-- End Services -->



@endsection