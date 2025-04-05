@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/services-header.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Services</h1>
        {{--<p class="white-text">From translation and transcription to summarization, categorization, subtitling, captioning, copywriting and voice over our multi-service platform can help with your content needs – all in one place</p>--}}
        <p class="white-text">Leebon provides professional industrial, medical, legal, certified and technical translations, transcription, localization, and interpreting services for the world. If you need a professional human transcription/translation, please contact us. We are always open</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Services -->
<div class="section-seperator">
<div class="content-lg container text-center space20px">
<ul class="nav nav-tabs custom-tabs">
    <li class="active text-left">
        <a data-toggle="tab" href="#Transcription">
            <span class="pull-left">
                <span style="text-decoration: underline">AUDIO/VIDEO TRANSCRIPTION</span><p class="mb-0">High quality</p>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="pull-right">
                <path d="M.7 0A1 1 0 0 0 1 2c8.3.2 12.4 2.5 14.3 4.8 1 1.2 1.2 2.3 1.3 3.2 0 1-.3 1.7-.5 1.8a1 1 0 0 0-.2 1l1.8 5.6v1l-.5.6-.5 1.4c0 .5 0 1 .4 1.6.2.5.8 1.3 1.5 2.2l1.8 2.4 1 1.4.2.6-1 .6-1.5.3a1 1 0 0 0-.8 1.3l.4 1c0 .4 0 .8.2 1v.5l-4.3.8a1 1 0 0 0-.7 1.5s1 2 3.5 3c-.2.3-.6.5-.6.5a1 1 0 0 0-.5 1l.2 1.2.2 1.5c0 .2 0 .4-.3.7-.2.2-.5.4-1.2.5-1.3.2-4.2-.3-6.5-.5-1.2 0-2.2.2-2.8.7-.6.5-1 1-1 1.2-.3.5-.4 1-.5 1.4v.2H1a1 1 0 1 0 0 2h3.8a1 1 0 0 0 1-.8s0-.3.3-.8l.4-1 .5-.6c.2-.2.5-.4 1.4-.3 2 0 5 .8 7 .4 1-.2 2-.7 2.4-1.3.5-.6.7-1.3.8-1.8 0-.8 0-1.5-.2-2.2v-.4l.5-.4c.5-.3.8-1 .8-1.5s-.4-1-1-1.3c-1-.5-1.6-1-2-1.5 1 0 1.7-.2 2.4-.4.5 0 1-.4 1.3-.8.3-.4.3-1 .3-1.3v-.8l-.3-1v-.2l.7-.2c.5 0 1-.3 1.4-.7.4-.3 1-.8 1-1.6 0-.7-.3-1.3-.6-1.8l-1-1.6-2-2.4-1.4-2v-.3-.5c.3-.2.6-.5.8-1 .3-.6.4-1.4 0-2.3 0-1-1.4-4.7-1.6-5.3.5-.8.8-1.7.8-2.7 0-1.4-.6-3-1.8-4.4C14.5 2.6 9.8.2 1 0a1 1 0 0 0-.2 0zM36 22a1 1 0 0 0-.2 0 1 1 0 0 0-.8.8l-3.2 18.4L29 29.7a1 1 0 0 0-2 0L24.4 37H23a1 1 0 1 0 0 2h2a1 1 0 0 0 1-.7l1.8-5 3.2 13a1 1 0 0 0 2 0l3.2-18.5L40 43.2a1 1 0 0 0 2 0L45 32l3 12.3a1 1 0 1 0 2-.5l-4-16a1 1 0 0 0-2 0L41 39l-4-16.3a1 1 0 0 0-1-.7z"/>
            </svg>
        </a>
    </li>
    <li class="text-left">
        <a data-toggle="tab" href="#Translation">
            <span class="pull-left">
                <span style="text-decoration: underline">AUDIO/VIDEO TRANSLATION</span><p class="mb-0">Even Better</p>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="pull-right">
                <path d="M6 3C4.3 3 3 4.3 3 6v20c0 1.7 1.3 3 3 3h.4L8 27H6c-.6 0-1-.4-1-1V6c0-.6.4-1 1-1h20c.6 0 1 .4 1 1v15h-3c-1.7 0-3 1.3-3 3v3h-5l1.6 2H21v3.4l2 1.7V24c0-.6.4-1 1-1h20c.6 0 1 .4 1 1v20c0 .6-.4 1-1 1H24c-.6 0-1-.4-1-1v-2l-2 1.7v.3c0 1.7 1.3 3 3 3h20c1.7 0 3-1.3 3-3V24c0-1.7-1.3-3-3-3H29V6c0-1.7-1.3-3-3-3H6zm10 5v2H8v2h12c-.4 2.2-1.7 4-3.3 5.5C14 15.3 13 13 13 13l-2 1s1.4 2.4 4 4.8c-2.8 2-5.4 3-5.4 3l.6 1.8s3-1 5.8-3c.2 0 .4-.3.7-.5 1 1 2.4 1.7 4 2.3l.7-1.8c-1.2-.5-2.2-1-3-1.7 1.7-1.8 3.2-4 3.5-6.8h3v-2h-7V8h-2zm-4 17l-5 6h3v4h4v-4h3l-5-6zm21 1.4l-5.2 13.8h2.5l1-3.2h5.4l1 3.2h2.6L35 26.4h-2zm1 3l2 5.7h-4l2-5.6zM19 33v3h-9l4 4h5v3l6-5-6-5z"/>
            </svg>
        </a>
    </li>
    <li class="text-left">
        <a data-toggle="tab" href="#Documents">
            <span class="pull-left">
                <span style="text-decoration: underline">DOCUMENT TRANSLATION</span><p class="mb-0">You won't beleive it</p>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="pull-right">
                <path d="M37 2a1 1 0 0 0-.2 0H20v5.8l.8.8L22 9.8V4h14v10h10v24H32v2h16V13.2a1 1 0 0 0 0-.4v-.2l-.2-.2a1 1 0 0 0-.2-.2l-9.8-9.8a1 1 0 0 0-.2-.2l-.2-.2h-.2a1 1 0 0 0-.2 0zm1 3.4l6.6 6.6H38V5.4zM19 10a1 1 0 0 0-.2 0H2v38h28V21.2a1 1 0 0 0 0-.4v-.2l-.2-.2a1 1 0 0 0-.2-.2l-9.8-9.8a1 1 0 0 0-.2-.2l-.2-.2h-.2a1 1 0 0 0-.2 0zM4 12h14v10h10v24H4V12zm16 1.4l6.6 6.6H20v-6.6zM30.2 18l2 2H42v-2H30.2zm1.8 6v2h6v-2h-6zM8 26v2h16v-2H8zm24 4v2h10v-2H32zM8 32v2h12v-2H8zm0 6v2h16v-2H8z" />
            </svg>
        </a>
    </li>
</ul>

<div class="tab-content text-left px-4 py-6">
    <div id="Transcription" class="tab-pane fade in active">
        {{--<p>Transcription services basically involve the conversion of an audio feed to text. These services are often a necessary element involved with the production of any multilingual video/audio content. One the text is transcribed, it can be captioned directly for the hearing impaired or as a tool for those who do not understand the original audio feed's spoken version of the language or those who prefer to see subtitles in the source language to complement the audio stream. This transcribed material may also be used as the basis for subsequent translations into different languages. Leebon has teams dedicated to transcribing audio content for use in the final post-production and translation process.</p>--}}
        {{--<p>We offer fast, accurate and confidential transcription for audio, video, plain text and subtitles across 100+ languages, as well as add-ons including faster turnaround time, multilingual audio, timestamps and additional file types.</p>--}}
        <p>We offer fast, accurate and confidential transcription services for audio/video/plain text and subtitles across 100+ languages, as well as add-ons including faster turnaround time, multilingual audio and additional file types.</p>
        <p>Leebon is dedicated to delivering industry-leading, professionally transcribed documents. Reserve your transcription delivery schedule in advance based on your project's timeline. Have ongoing needs for super-fast turnaround? Talk to us and we'll work with you to develop a custom "Rush" schedule.</p>
        <p>You may be amazed by how quickly your audio and video transcription can be delivered!</p>
        <div class="sm-margin-b-50">
            <h3>General</h3>
            <p>A specialized team of linguists will be assigned to your transcription projects based on the requested language and subject matter. Linguists are always thoroughly vetted and sign NDAs.</p>
        </div>
        <div class=" sm-margin-b-50">
            <h3>Legal</h3>
            <p>Courts are the final hope for people who wish to sort things out in a justifying and legal manner. The judgment of any case depends on various factors & reasons. Documentation and evidence are the backbones of any legal pleas or cases. The transcription is done by a transcriber who has a legal background and legal transcription expertise. The content is then fully reviewed by a second legal transcriber.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Academic</h3>
            <p>Academic transcription makes research studies and scholastic records, such as Lectures and transcript of records easily accessible for all.</p>
        </div>
        <div class="clearfix"></div>
        <div class="sm-margin-b-50">
            <h3>Medical</h3>
            <p>Leebon transcribe very accurately and consistently throughout the projects, such as marketing or clinical, regulatory and technical recordings, training materials for healthcare, medical lectures and other pharmaceutical audios/videos.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Financial</h3>
            <p>Leebon understands the specific regulatory and confidentiality of financial documents. Therefore, we always work with trustable and contracted linguists.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Business</h3>
            <p>Your business deserves only the best that is why our unbeatable business transcription is right for you.</p>
        </div>
        <div class="clearfix"></div>
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>Have A Large Project?</h2>
                    <p>Speak to one of our project managers.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('/assets/img/img_tab1_services.png') }}" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>




    </div> <!--   ##Transcription   -->

    <div id="Translation" class="tab-pane fade in">
        <p>A wide range of leading corporations and institutions of all sizes depend on Leebon to translate their important document, audio/video files and other materials. They continually work with us because of our reliability, accuracy, professional standards and timeliness. We work on any written material- whether it is legal, medical or technical- and translate it into or from over 100 languages. You may be astounded at how easy it is to work with us.</p>
        <div class="sm-margin-b-50">
            <h3>General</h3>
            <p>A specialized team of linguists will be assigned to your transcription projects based on the requested language and subject matter. Linguists are always thoroughly vetted and sign NDAs.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Legal</h3>
            <p>Courts are the final hope for people who wish to sort things out in a justifying and legal manner. The judgment of any case depends on various factors & reasons. Documentation and evidence are the backbones of any legal pleas or cases. The transcription is done by a transcriber who has a legal background and legal transcription expertise. The content is then fully reviewed by a second legal transcriber.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Academic</h3>
            <p>Academic transcription makes research studies and scholastic records, such as Lectures and transcript of records easily accessible for all.</p>
        </div>
        <div class="clearfix"></div>
        <div class="sm-margin-b-50">
            <h3>Medical</h3>
            <p>Leebon transcribe very accurately and consistently throughout the projects, such as marketing or clinical, regulatory and technical recordings, training materials for healthcare, medical lectures and other pharmaceutical audios/videos.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Financial</h3>
            <p>Leebon understands the specific regulatory and confidentiality of financial documents. Therefore, we always work with trustable and contracted linguists.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Business</h3>
            <p>Your business deserves only the best that is why our unbeatable business transcription is right for you.</p>
        </div>

        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>Have A Large Project?</h2>
                    <p>Speak to one of our project managers.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('/assets/img/img_tab2_services.png') }}" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
    </div> <!--   ##Translation   -->

    <div id="Documents" class="tab-pane fade in">
        <p>Leebon is a leading provider of document translation services for small and mid-sized businesses around the globe. Our prices are among the most competitive in the industry and our turnaround time is unparalleled, starting at under 12 hours. We are committed to service as well, and our dedicated customer service team will ensure your orders are handled with care. We have experience with a wide range of business documents: research initiatives, surveys and questionnaires, PowerPoint presentations, financial statements, emails, and many others.</p>
        <div class="sm-margin-b-50">
            <h3>General</h3>
            <p>A specialized team of linguists will be assigned to your translation projects based on the requested language and subject matter of the source documents. Linguists are always thoroughly vetted and sign NDAs.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Legal</h3>
            <p>Courts are the final hope for people who wish to sort things out in a justifying and legal manner. The judgment of any case depends on various factors & reasons. Documentation and evidence are the backbones of any legal pleas or cases. The translation is done by a translator who has a legal background and legal translation expertise. The content is then fully reviewed by a second legal translator.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Academic</h3>
            <p>Academic translation makes research studies and scholastic records, such as Lectures and transcript of records easily accessible for all.</p>
        </div>
        <div class="clearfix"></div>
        <div class="sm-margin-b-50">
            <h3>Medical</h3>
            <p>Leebon translates very accurately and consistently throughout the projects, such as marketing or clinical, regulatory and technical recordings, training materials for healthcare, medical lectures and other pharmaceutical audios/videos.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Financial</h3>
            <p>Leebon understands the specific regulatory and confidentiality of financial documents. Therefore, we always work with trustable and contracted linguists.</p>
        </div>
        <div class="sm-margin-b-50">
            <h3>Business</h3>
            <p>Your business deserves only the best that is why our unbeatable business translation is right for you.</p>
        </div>


        <div class="clearfix"></div>
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>Have A Large Project?</h2>
                    <p>Speak to one of our project managers.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('/assets/img/img_tab3_services.png') }}" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
            <div class="row" style="display: none;">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>Can’t find the service you need? <a href="{{ url('contact-us') }}" style="text-decoration: underline;"><strong>Contact</strong></a> us to get in touch with our solution expert that how Leebon can work for you.</p>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div> <!--   ##Documents   -->
    
</div>
</div>
</div>

<!-- End Services -->

<!-- About -->
<div class="content-lg container" style="display: none;">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2>Still not convinced?</h2>
        </div>
    </div>
    <!--// end row -->

    <div class="row">
        <div class="col-sm-7 sm-margin-b-50">
            <div class="margin-b-30">
                <p>Can’t find the service you need? <a href="{{ url('contact-us') }}" style="text-decoration: underline;"><strong>Contact</strong></a> us to get in touch with our solution expert that how Leebon can work for you.</p>
            </div>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <img class="img-responsive" src="{{ asset('/assets/img/640x380/img-services2.jpg') }}" alt="Our Office">
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End About -->


@endsection