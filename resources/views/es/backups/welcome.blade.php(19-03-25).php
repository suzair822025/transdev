@extends('layouts.app')
@section('content')
<!--========== SLIDER ==========-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" src="{{ asset("/assets/img/1920x1080/01.jpg") }}" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-10">
                        <h1 class="carousel-title titlehome-topspace">Ultra Punctilious Translation & Transcription Services </h1>
                        <p class="col-sm-8 pl-0 mb-2">Over a decade of experiential journey and undeviating diligence to our worthwhile customers, Leebon has been emerged as an ingenious and trustworthy translation services provider in the industry. The essence of our company solely rests on excellence, coherence, ingenuity and customer satisfaction. We will continue to strive to exceed our commitment to customers with pioneering vision.</p>
                        <a href="{{ route('pricing') }}" class="calcicon-home hidden-xs">
                            <span class="calcicon-hom-label instpr-calc-lbl hidden-xs">Instant Price Calculator</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row mt-5">
                        <div class="col-md-2 col-sm-12 px-0 m-3">
                            <a href="{{ url('order') }}" class="btn-theme btn-theme-sm btn-white-brd text-uppercase transparent-btn btn-block">Get Started Now</a>
                        </div>
                        <div class="col-md-2 col-sm-12 px-0 m-3">
                            <a href="{{ url('get-quote') }}" class="btn-theme btn-theme-sm btn-white-brd text-uppercase transparent-btn btn-block">Get A Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-lg container space20px">
    <div class="row margin-b-40">
        <div class="col-sm-12">
            <h2>Translation Over 100+ Languages</h2>
            <p>Leebon is holding ability to undergird huge amount of translation assignments, in over 100 languages. We can tackle bulk content across industries and on-demand translation projects with the help of our outstanding team spread over across the globe.</p>
            <div class="clearfix"></div>
            <ul class="languages-list">
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-german.png") }}" alt="German">
                    </span><span class="lang-name">German</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-french.png") }}" alt="German">
                    </span><span class="lang-name">French</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-spanish.png") }}" alt="German">
                    </span><span class="lang-name">Spanish</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-dutch.png") }}" alt="German">
                    </span><span class="lang-name">Dutch</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-chinese.png") }}" alt="German">
                    </span><span class="lang-name">Chinese</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-portuguese.png") }}" alt="German">
                    </span><span class="lang-name">Portuguese</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-russian.png") }}" alt="German">
                    </span><span class="lang-name">Russian</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-arabic.png") }}" alt="German">
                    </span><span class="lang-name">Arabic</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-italian.png") }}" alt="German">
                    </span><span class="lang-name">Italian</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-danish.png") }}" alt="German">
                    </span><span class="lang-name">Danish</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-polish.png") }}" alt="German">
                    </span><span class="lang-name">Polish</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-malay.png") }}" alt="German">
                    </span><span class="lang-name">Malay</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-romanian.png") }}" alt="German">
                    </span><span class="lang-name">Romanian</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-swedish.png") }}" alt="German">
                    </span><span class="lang-name">Swedish</span>
                </li>
                <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-korean.png") }}" alt="German">
                    </span><span class="lang-name">Korean</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-ukranian.png") }}" alt="German">
                    </span><span class="lang-name">Ukranian</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-japanese.png") }}" alt="German">
                    </span><span class="lang-name">Japanese</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-bulgarian.png") }}" alt="German">
                    </span><span class="lang-name">Bulgarian</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-croatian.png") }}" alt="German">
                    </span><span class="lang-name">Croatian</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-georgian.png") }}" alt="German">
                    </span><span class="lang-name">Georgian</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-hebrew.png") }}" alt="German">
                    </span><span class="lang-name">Hebrew</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-greek.png") }}" alt="German">
                    </span><span class="lang-name">Greek</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-hungarian.png") }}" alt="German">
                    </span><span class="lang-name">Hungarian</span>
                </li>
                 <li class="col-xs-4 col-sm-3">
                    <span class="flag">
                        <img class="" src="{{ asset("/assets/img/flag-serbian.png") }}" alt="German">
                    </span><span class="lang-name">Serbian</span>
                </li>
            </ul>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- Service -->
<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container space20px">
        <div class="row row-space-1 margin-b-2">
            <div class="col-md-6 sm-margin-b-2 d-none">
                <div class="wow">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-volume-2"></i>
                        </div>
                        <div class="service-info">
                            <h3>Voice To Text</h3>
                            <p class="margin-b-5">Transcription services basically involve the conversion of an audio feed to text. These services are often a necessary element involved with the production of any multilingual video/audio content. One the text is transcribed, it can be captioned directly for the hearing impaired or as a tool for those who do not understand the original audio feed's spoken version of the language or those who prefer to see subtitles in the source language to complement the audio stream.
                            This transcribed material may also be used as the basis for subsequent translations into different languages. Leebon has teams dedicated to transcribing audio content for use in the final post-production and translation process.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-margin-b-2">
                <div class="wow">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-briefcase"></i>
                        </div>
                        <div class="service-info">
                            <h3>Translation Services</h3>
                            <p class="margin-b-5">Our qualified team consists of inhouse and freelance linguists, interpreters, translators, proofreaders, and quality assurance managers all with solid professional qualification and background in language translation and interpreting. Our translators are skilled in your industry, as well as in language and linguistics.
                                Leebon has productized a separate section for businesses to provide high quality and cost-effective translation and transcription services. Unlike other.translation and transcription companies, Leebon has the unique ability to convert and translate media of all kinds and in all languages. From highly complex legal content to the academic, technical and medical records, Leebon has acquired translation and transcription specialists to provide you with the services you need at the best prices in the industry. We also offer rush translation and transcription services to solve your time-sensitive needs. As with all our services, Leebon is committed to strict confidentiality and quality.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-margin-b-2">
                <div class="wow">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-briefcase"></i>
                        </div>
                        <div class="service-info">
                            <h3>Transcription</h3>
                            <p class="margin-b-5">
                                We offer fast, accurate and confidential transcription services for audio/video/plain text and subtitles across 100+ languages, as well as add-ons including faster turnaround time, multilingual audio and additional file types.
                                We do transcriptions from audio recordings of meetings, interviews, hearings, and most other occasions. We offer transcriptionists with wide-ranging backgrounds, especially those with legal and medical experience.  Leebon fulfills all your transcriptions needs. We utilize ONLY in-house professional transcriptionists and certified legal and medical transcribers who offer specializations in different subject areas. we guarantee at least 98% accuracy on all your transcripts. All transcripts submitted by our transcriptionists are proofread, edited, and reviewed by quality control staff to ensure our high accuracy guarantee.
                                If you have more than three to five hours of audio that need to be transcribed, just let us know. We'll be happy to give you a three-minute, FREE transcription sample to show you that we really are as good as we say we are.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-margin-b-2">
                <div class="wow">
                    <div class="service">
                        <div class="service-element">
                            <i class="service-icon icon-briefcase"></i>
                        </div>
                        <div class="service-info">
                            <h3>Voice Over</h3>
                            <p class="margin-b-5">We offer certified voice-over services in almost every language of the world. Find the best voice-over artists at your service with Leebon at reasonable prices. For more detail please contact us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow">
                    <div class="service">
                        <div class="service-element">
                            <i class="service-icon icon-doc"></i>
                        </div>
                        <div class="service-info">
                            <h3>Subtitling</h3>
                            <p class="margin-b-5">With language specialists from across the globe, we produce optimum subtitles with utmost expertise for your videos, presentations, broadcast media, and so much more. For more detail please contact us.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-margin-b-2 d-none">
                <div class="">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <i class="service-icon icon-notebook"></i>
                        </div>
                        <div class="service-info">
                            <h3>Translation</h3>
                            <p class="margin-b-5">Leebon has the capacity to support high volume translation projects, in over 100 languages. We streamlined the entire translation workflow and eliminating all the delays. We can handle huge amounts of content across all industries on-demand translation through our order form.
                            Our translators are native speakers of the target language, completely fluent in the source language, and highly experienced in the art of subtitle and documents translation.  To maintain the absolute highest quality control for our subtitling services, each of our translations is reviewed by at least three translators.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service -->

<!-- Pricing Per Word -->
<div class="container-fluid pricing-bg pricing-box">
    <div class="margin-b-40 pos-relative">
        <div class="pt-30 pb-0 container">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
                 <div class="carousel-inner">
                     <div class="active item">
                         <div class="col-xs-12 col-md-4 priceListing text-center homeprice-slider-col"><span>Starting from</span>
                             <strong>$0.08</strong><span>/word</span>
                         </div>
                         <div class="col-xs-12 col-md-8 text-center home-points homeprice-slider-col">
                             <ul class="bonuscont-list mt-5">
                                 <li class="doctrans-lbl"><span class="doctrans-txt">Documents Translation</span> <br> <span class="fonts-14px">Our prices are among the most competitive in the industry and our turnaround time is unparalleled, starting at under 12 hours.</span></li>
                             </ul>
                         </div>
                     </div>
                     <div class="item">
                        <div class="col-xs-12 col-md-4 priceListing text-center homeprice-slider-col"><span>Starting from</span>
                            <strong>$0.75</strong><span>/min</span>
                        </div>
                        <div class="col-xs-12 col-md-8 text-center home-points homeprice-slider-col">
                            <ul class="bonuscont-list mt-5">
                                <li class="doctrans-lbl"><span class="doctrans-txt">Audio/Video Transcription</span> <br> <span class="fonts-14px">You may be amazed by how quickly your audio and video transcription can be delivered!</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-md-4 priceListing text-center homeprice-slider-col"><span>Starting from</span>
                            <strong>$2</strong><span>/min</span>
                        </div>
                        <div class="col-xs-12 col-md-8 text-center home-points homeprice-slider-col">
                            <ul class="bonuscont-list mt-5">
                                <li class="doctrans-lbl"><span class="doctrans-txt">Audio/Video Translation</span> <br> <span class="fonts-14px">We promise! <br>Fast turnaround, Competitive prices, Always human, translations 99.9% accuracy</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Pricing Per Word -->
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-2 text-center col-sm-offset-2 col-md-offset-4 my-5">
            <a href="{{ url('pricestable') }}" class="btn-theme btn-theme-sm text-uppercase btn-md">More Details</a>
        </div>
        <div class="col-sm-4 col-md-2 text-center my-5">
            <a href="{{ url('pricing') }}" class="btn-theme btn-theme-sm text-uppercase btn-md">Volume Pricing</a>
        </div>
    </div>
</div>
<!-- Pricing -->
<div class="bg-color-sky-light">
    <div class="content-lg container space20px">
        <div class="row row-space-1">
            <div class="col-sm-12 sm-margin-b-2">
                <div class="pricing pricing-active1">
                    <div class="margin-b-0">
                        <img src="{{ asset("/assets/img/customerservice-icon.png") }}" alt="Customer Services" width="50" >
                        <h3>Unsurpassed Customer Service</h3>
                        <p><span class="text-underlne">Customer Service is Our Top Priority</span> <br>
                            When we started Leebon, we wanted to create a different environment for our customers. Yes we wanted to build a successful company but we also wanted to create an accessible one. A company where our customers could contact us and be assured of getting technically knowledgeable, helpful and timely customer service in person. We don't believe in automated customer service. Our customers should be able to call us on the phone or come up with live chat to get immediate help from a live person. A person, who has been technically trained and is well versed in the translation services industry. When you contact Leebon that's exactly what you'll get
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 sm-margin-b-2">
                <div class="pricing">
                    <div class="margin-b-0">
                        <img src="{{ asset("/assets/img/certificate-icon.png") }}" alt="Leebon is best for you" width="50" height="50">
                        <h3>Why Leebon is best for you?</h3>
                        <p>With office in the US, Leebon is open 24/7 to answer questions and work on translation projects. We support over 100 language combinations and have a team of over 6,000 translators spread across the globe. As a translation company, we work on a “first-time-right” approach. With nearly a decade of experience in supplying translation services in more than 100 languages, we know what works in multilingual publication. Our translation company places great importance in having an initial quality translation from a professional translator. By carefully selecting the best translators, we obtain quality translations in a first draft. Our aim is to reduce revision and proof-reading time afterwards.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="pricing">
                    <div class="margin-b-0">
                        <img src="{{ asset("/assets/img/money-bag.svg") }}" alt="Accuracy and Economy" width="50" height="50">
                        <h3>Accuracy and Economy</h3>
                        <p>To assure best quality translation services, Leebon offers a sample of 2-5 minutes for transcription and 2-3 pages in case of document translation on every project. Our main objective and focus is to provide unsurpassable quality and accuracy for your business, academic or legal transcription and translation needs. We offer fast turnaround time even on your projects that may have a lower quality audio/video. We are so confident in our ability to provide a high-quality service that we offer excellent discounts on bulk projects and are proud to offer a money back guarantee on all our services.<br>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 sm-margin-b-2">
                <div class="pricing">
                    <div class="margin-b-0">
                        <img src="{{ asset("/assets/img/outteam-icon.svg") }}" alt="Leebon Outstanding Professional Team" width="50" height="50">
                        <h3>Our Outstanding Professional Team</h3>
                        <p>Our translators and transcribers are highly professional, assessed and approved to ensure Leebon’s clients with accurate translation and transcription services. We contract a vast pool of translators and transcriber from every corner of the world for both local and international translation and transcription projects. Our team cover a wide range of subject matter, and undertake required research to ensure important meanings or terms are applied in the production of translation and transcription. We work with over 6000 of the most highly trained and experienced translators and transcribers who can work with your Audio/Video/Document projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 sm-margin-b-2">
                <div class="pricing mt-0">
                    <div class="margin-b-0">
                        <img src="{{ asset("/assets/img/padlock.svg") }}" alt="Leebon Serucre & Reliable" width="50" height="50">
                        <h3>Serucre & Reliable</h3>
                        <p>Your files are securely stored and transmitted using 128-bit SSL encryption, the highest level of security available. We never store credit card information - we simply pass it securely to our bank for safe-keeping. We will never share your files or personal information with anyone outside of Leebon. Files are only visible to the professionals who have signed strict confidentiality agreements. If you'd ever like us to delete your files, just let us know.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- Testimonials -->
<div class="content-lg container space20px">
    <div class="row">
        <div class="col-sm-10 col-md-offset-1">
            <h2>Customer Reviews</h2>
            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                “Highly recommended. Professional, consistently accurate and high quality service.”
                            </div>
                            <img src="{{ asset("/assets/img/customer1.jpg") }}" alt="Henk Westenbroek">
                            <p><span class="fweight-700 color-link">Henk Westenbroek</span></p>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                The team at Leebon provided us with excellent and swift turnaround on several of our projects. We would recommend them as a quality partner for your business.”
                            </div>
                            <img src="{{ asset("/assets/img/marry.png") }}" alt="Alex Clarson, Metronic Customer">
                            <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                “I was referred to Leebon by a fellow business owner and am I glad that I made that connection. The team had great communication and easily understood exactly what I needed. The prices are great too. Two thumbs up!”
                            </div>
                            <img src="{{ asset("/assets/img/customer3.jpg") }}" alt="">
                            <p><span class="fweight-700 color-link">Bert Jan Doedel</span></p>
                        </blockquote>
                    </div>
                </div>
                <!-- End Swiper Wrapper -->
                <!-- Pagination -->
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Testimonials -->
<div class="bg-color-sky-light overflow-h">
    <div class="content-lg container space20px">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">A CONCLUSIVE COMPOSITE OF EXCELLENCE, QUIKNESS AND TIMELINESS: TRANSLATION WINDOW IS A PRIME CHOICE FOR TRANSLATION & TRANSCRIPTION SERVICES.</h3>
                <p class="text-center">From translation, transcription, subtitling, captioning and Voice Over our multi-service platform can help with your needs – all in one place</p>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<div class="md-modal md-effect-4" id="modal-4">
    <div class="md-content">
        <h3>GALA 2020 San Diago</h3>
        <div>
            <p><strong>Meet Our Team</strong></p>
            <p>We love to meet and connect with clients, partners, associations and other event professionals.Meet us at the events GALA. San Diego, March 17 2020</p>
            <button class="md-close btn-theme btn-theme-sm text-uppercase btn-md">Close</button>
        </div>
    </div>
</div>
@endsection