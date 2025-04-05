@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/assets/img/1920x1080/services-header.jpg') }}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">Document Translation</h1>
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
    <div id="Documents">
        <p>Leebon is a leading provider of document translation services for small and mid-sized businesses around the globe. Our prices are among the most competitive in the industry and our turnaround time is unparalleled, starting at under 12 hours. We are committed to service as well, and our dedicated customer service team will ensure your orders are handled with care. We have experience with a wide range of business documents: research initiatives, surveys and questionnaires, PowerPoint presentations, financial statements, emails, and many others.</p>
        <div class="sm-margin-b-50">
            <h2 class="h2">General</h3>
            <p>A specialized team of linguists will be assigned to your translation projects based on the requested language and subject matter of the source documents. Linguists are always thoroughly vetted and sign NDAs.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Legal</h2>
            <p>Courts are the final hope for people who wish to sort things out in a justifying and legal manner. The judgment of any case depends on various factors & reasons. Documentation and evidence are the backbones of any legal pleas or cases. The translation is done by a translator who has a legal background and legal translation expertise. The content is then fully reviewed by a second legal translator.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Academic</h2>
            <p>Academic translation makes research studies and scholastic records, such as Lectures and transcript of records easily accessible for all.</p>
        </div>
        <div class="clearfix"></div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Medical</h2>
            <p>Leebon translates very accurately and consistently throughout the projects, such as marketing or clinical, regulatory and technical recordings, training materials for healthcare, medical lectures and other pharmaceutical audios/videos.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Financial</h2>
            <p>Leebon understands the specific regulatory and confidentiality of financial documents. Therefore, we always work with trustable and contracted linguists.</p>
        </div>
        <div class="sm-margin-b-50">
            <h2 class="h2">Business</h2>
            <p>Your business deserves only the best that is why our unbeatable business translation is right for you.</p>
        </div>


        <div class="clearfix"></div>
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h3 class="h3">Have A Large Project?</h3>
                    <p>Speak to one of our project managers.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('/assets/img/img_tab3_services.png') }}" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
    </div> <!--   ##Documents   -->
    
</div>
</div>
</div>

<!-- End Services -->


@endsection