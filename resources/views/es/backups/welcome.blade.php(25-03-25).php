@extends('layouts.app')
@section('content')
    <!-- Start Banner Area 
    ============================================= -->
    <div class="banner-area banner-style-two1 content-right navigation-custom-large zoom-effect overflow-hidden text-light">
        <!-- Slider main container -->
        <div class="banner-fade1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Single Item -->
                <div class="swiper-slide banner-style-two">
                    <div class="banner-thumb bg-cover shadow dark homeslider-bg"></div>
                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-7 col-lg-7">
                                    <div class="content">
                                        <h2 class="slider-title1"><span class="sm-sl-title">Expert linguisic</span><br></bnr><strong>Services Tailored</strong> To Your Needs.</h2>
                                        <span>We offer certified and business translation services that are reliable, affordable, and easy to order, ensuring accuracy and fast delivery.</span>
                                        <div class="shape-circle d-none"></div>
                                    </div>
                                </div>
                                <div id="signup-form" class="col-lg-5 my-lg-5 mb-30">
                                    <div class="mt-20">&nbsp;</div>
                                    <form id="hero-reg-form" action="sendsignup.php" method="POST">
                                        <div class="row tp-gx-10">
                                            <div class="col-md-6">
                                                <div class="tp-contact-input">
                                                    <input name="name" type="text" placeholder="Your Name*" id="validationCustom02" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-contact-input">
                                                    <input name="email" type="email" placeholder="Email Address*" id="validationCustom02" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-contact-input" style="display: block;">
                                                    <select name="service_type" class="wide">
                                                    <option disabled selected value> -- Choose a service -- </option>
                                                    <option value="Audio/Video Transcription">Audio/Video Transcription</option>
                                                    <option value="Audio/Video Translation">Audio/Video Translation</option>
                                                    <option value="Document Translation">Dcument Translation</option>
                                                    <option value="Subtitling">Subtitling</option>
                                                    <option value="Content Writing">Proofreading & copy-editing</option>
                                                    <option value="Content Writing">Proofreading and translation of AI content</option>
                                                    <option value="Content Writing">Industry-specific services</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tp-contact-input">
                                                    <input name="phone" type="text" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="tp-contact-input">
                                                    <textarea name="message" placeholder="Enter Your Message here"></textarea>
                                                </div>
                                            </div>
                                            <div class="tp-contact-btn mt-10 text-center">
                                                <button type="submit" class="reg-tp-btn rbutton w-100" name="submitHeroReg">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="ajax-response"></p> 
                                </div> <!-- ##signup-form -->
                            </div>
                        </div>
                    <!-- Shape -->
                    <div class="banner-angle-shape">
                        <div class="shape-item" style="background: url({{ asset('/assets/img/shape/2.webp') }}"></div>
                    </div>
                    <!-- End Shape -->
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="swiper-slide banner-style-two">
                    <div class="banner-thumb bg-cover shadow dark"></div>
                    <img src="{{ asset('/assets/img/banner/transcription-banner-u.avif') }}" alt="" style="position: absolute; z-index:1; width:100%;">
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7 offset-xl-5 col-lg-10 offset-lg-1">
                                <div class="content">
                                    <h2><span class="sm-sl-title">Audio - video transcription</span><br><strong>Trancribe your</strong> Audio-Video Files</h2>
                                    <div class="button">
                                        <a class="btn circle btn-gradient btn-md radius animation" href="av-transscription.php">learn More</a>
                                    </div>
                                    <div class="shape-circle d-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape -->
                    <div class="banner-angle-shape">
                        <div class="shape-item" style="background: url({{ asset('/assets/img/shape/2.png') }});"></div>
                    </div>
                    <!-- End Shape -->
                </div>
                <!-- End Single Item -->
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>        
    </div>
    <!-- End Main -->
    <!-- Start About
    ============================================= -->
    <div class="about-style-three-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="about-style-three-info">
                        <h4 class="sub-title">About Us</h4>
                        <h1 class="title">Providing solutions for translation services</h1>
                        <p>Our business specializes in providing thorough translation solutions that are suited to your unique requirements. Our highly skilled linguists and cutting-edge technology guarantee accurate translations that are culturally appropriate for a variety of businesses. Whether you need localization, multilingual support, or document translation, we can help you close communication gaps and reach a worldwide audience with our dependable and effective services.</p>
                        <div class="info-grid mt-50">
                            <div class="left-info">
                                <div class="fun-fact-card-two">
                                    <h4 class="sub-title">Our Expertise</h4>
                                    <div class="counter-title">
                                        <div class="counter">
                                            <div class="timer" data-to="10" data-speed="2000">10</div>
                                            <div class="operator">+</div>
                                        </div>
                                    </div>
                                    <span class="medium">Years of experience</span>
                                </div>
                            </div>
                            <div class="right-info bg-gradient text-light">
                                <ul class="list-style-three">
                                    <li>Audio/Video Translation</li>
                                    <li>Document Translation</li>
                                    <li>Audio/Video Transcription</li>
                                    <li>Subtitling</li>
                                    <li>Proofreading & Copy-Editing</li>
                                    <li>Proofreading & AI Translation</li>
                                    <li>Industry-Specific Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="thumb-style-two">
                        <img src="{{ asset('/assets/img/about/4.jpg') }}" alt="Providing solutions for translation services
">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Partner 
    ============================================= -->
    <div class="partner-style-one-area default-padding bg-dark text-light d-none" style="background-image: url({{ asset('/assets/img/shape/25.png') }});">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-4">
                    <h2 class="title">Thrusted brands work with us</h2>
                </div>
                <div class="col-xl-8 pl-60 pl-md-15 pl-xs-15 brand-one-contents">
                    <div class="brand-style-one-items">
                        <div class="brand-style-one-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="brand-one">
                                        <img src="{{ asset('/assets/img/brand/11.png') }}" alt="Image Not Found">
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="brand-one">
                                        <img src="{{ asset('/assets/img/brand/22.png') }}" alt="Image Not Found">
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="brand-one">
                                        <img src="{{ asset('/assets/img/brand/55.png') }}" alt="Image Not Found">
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                 <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="brand-one">
                                        <img src="{{ asset('/assets/img/brand/66.png') }}" alt="Image Not Found">
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner -->
    <!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-style-two-area relative bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 order-xl-last pl-80 pl-md-15 pl-xs-15 choose-us-style-two-content">
                    <div class="info-style-one">
                        <h4 class="sub-title">Why Choose Us</h4>
                        <h2 class="title">Empowering success in technology since 2014 </h2>
                        <p>
                        At Translationwindows, we understand that every project and client has different requirements. The main causes of this are the variations in project size, industry, and language. We therefore approach each order with a unique technique. Our translators have experience in a variety of fields, such as education and medical. This enables us to match you with a thoroughly qualified and screened translator in your particular industry, ensuring accurate and quick professional translation services.
                        </p>
                        <a class="btn btn-md circle btn-gradient animation mt-20" href="about-us.html">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="thumb-style-three">
                        <img src="{{ asset('/assets/img/illustration/7.webp') }}" alt="Translation windows empowering success in technology since 2014
" width="539">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

        <!-- Start Get Quote 
    ============================================= -->

    <div class="services-content bg-gray-secondary default-padding d-md-block">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h4 class="sub-title mb-5">Simple Procedure for Online Orders</h4>
            </div>
            <div class="about-style-one-items">
                <div class="row my-5">
                    <div class="col-xl-7 col-lg-7 pl-50 pl-md-15 pl-xs-15 mb-5">
                        <div class="contact-form-style-one">
                            <form id="get-quote-form" action="getquote.php" method="POST" enctype="multipart/form-data">
                                <div class="row tp-gx-10">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Your Name*" class="form-control" id="validationCustom01" required>
                                    </div>
                                </div>
                                </div>
                                <div class="row tp-gx-10">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="email" type="text" placeholder="Your Email*" class="form-control" id="validationCustom02" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row tp-gx-10">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Your Phone*" class="form-control" id="validationCustom03" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row tp-gx-10">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="translation_type" id="" class="nice-select">
                                                <option value="">Choose Translation Type</option>
                                                <option value="Certified Translation">Certified Translation</option>
                                                <option value="Professional Translation">Professional Translation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row tp-gx-10">
                                    <div class="col-md-12">
                                            <p>How would you like Translationwindows to contact you?</p>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="contactOption" id="inlineRadio1" value="Phone">
                                                <label class="form-check-label" for="inlineRadio1">Via Phone</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="contactOption" id="inlineRadio2" value="Email">
                                                <label class="form-check-label" for="inlineRadio2">Via Email</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="row tp-gx-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Translate from</label>
                                            <select name="source_lang" id="" class="nice-select">
                                                <option value="">Choose Language</option>
                                                <option value="Afrikaans">Afrikaans</option>
                                                <option value="Albanian">Albanian</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Armenian">Armenian</option>
                                                <option value="Basque">Basque</option>
                                                <option value="Bengali">Bengali</option>
                                                <option value="Bulgarian">Bulgarian</option>
                                                <option value="Catalan">Catalan</option>
                                                <option value="Cambodian">Cambodian</option>
                                                <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                <option value="Croatian">Croatian</option>
                                                <option value="Czech">Czech</option>
                                                <option value="Danish">Danish</option>
                                                <option value="Dutch">Dutch</option>
                                                <option value="English">English</option>
                                                <option value="Estonian">Estonian</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finnish">Finnish</option>
                                                <option value="French">French</option>
                                                <option value="Georgian">Georgian</option>
                                                <option value="German">German</option>
                                                <option value="Greek">Greek</option>
                                                <option value="Gujarati">Gujarati</option>
                                                <option value="Hebrew">Hebrew</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Hungarian">Hungarian</option>
                                                <option value="Icelandic">Icelandic</option>
                                                <option value="Indonesian">Indonesian</option>
                                                <option value="Irish">Irish</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Javanese">Javanese</option>
                                                <option value="Korean">Korean</option>
                                                <option value="Latin">Latin</option>
                                                <option value="Latvian">Latvian</option>
                                                <option value="Lithuanian">Lithuanian</option>
                                                <option value="Macedonian">Macedonian</option>
                                                <option value="Malay">Malay</option>
                                                <option value="Malayalam">Malayalam</option>
                                                <option value="Maltese">Maltese</option>
                                                <option value="Maori">Maori</option>
                                                <option value="Marathi">Marathi</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Norwegian">Norwegian</option>
                                                <option value="Persian">Persian</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Punjabi">Punjabi</option>
                                                <option value="Quechua">Quechua</option>
                                                <option value="Romanian">Romanian</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Samoan">Samoan</option>
                                                <option value="Serbian">Serbian</option>
                                                <option value="Slovak">Slovak</option>
                                                <option value="Slovenian">Slovenian</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Swahili">Swahili</option>
                                                <option value="Swedish ">Swedish </option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Tatar">Tatar</option>
                                                <option value="Telugu">Telugu</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Tibetan">Tibetan</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Turkish">Turkish</option>
                                                <option value="Ukrainian">Ukrainian</option>
                                                <option value="Urdu">Urdu</option>
                                                <option value="Uzbek">Uzbek</option>
                                                <option value="Vietnamese">Vietnamese</option>
                                                <option value="Welsh">Welsh</option>
                                                <option value="Xhosa">Xhosa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Translate to</label>
                                            <select name="target_lang" id="" class="nice-select">
                                                <option value="">Choose Language</option>
                                                <option value="Afrikaans">Afrikaans</option>
                                                <option value="Albanian">Albanian</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Armenian">Armenian</option>
                                                <option value="Basque">Basque</option>
                                                <option value="Bengali">Bengali</option>
                                                <option value="Bulgarian">Bulgarian</option>
                                                <option value="Catalan">Catalan</option>
                                                <option value="Cambodian">Cambodian</option>
                                                <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                <option value="Croatian">Croatian</option>
                                                <option value="Czech">Czech</option>
                                                <option value="Danish">Danish</option>
                                                <option value="Dutch">Dutch</option>
                                                <option value="English">English</option>
                                                <option value="Estonian">Estonian</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finnish">Finnish</option>
                                                <option value="French">French</option>
                                                <option value="Georgian">Georgian</option>
                                                <option value="German">German</option>
                                                <option value="Greek">Greek</option>
                                                <option value="Gujarati">Gujarati</option>
                                                <option value="Hebrew">Hebrew</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Hungarian">Hungarian</option>
                                                <option value="Icelandic">Icelandic</option>
                                                <option value="Indonesian">Indonesian</option>
                                                <option value="Irish">Irish</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Javanese">Javanese</option>
                                                <option value="Korean">Korean</option>
                                                <option value="Latin">Latin</option>
                                                <option value="Latvian">Latvian</option>
                                                <option value="Lithuanian">Lithuanian</option>
                                                <option value="Macedonian">Macedonian</option>
                                                <option value="Malay">Malay</option>
                                                <option value="Malayalam">Malayalam</option>
                                                <option value="Maltese">Maltese</option>
                                                <option value="Maori">Maori</option>
                                                <option value="Marathi">Marathi</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Norwegian">Norwegian</option>
                                                <option value="Persian">Persian</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Punjabi">Punjabi</option>
                                                <option value="Quechua">Quechua</option>
                                                <option value="Romanian">Romanian</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Samoan">Samoan</option>
                                                <option value="Serbian">Serbian</option>
                                                <option value="Slovak">Slovak</option>
                                                <option value="Slovenian">Slovenian</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Swahili">Swahili</option>
                                                <option value="Swedish ">Swedish </option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Tatar">Tatar</option>
                                                <option value="Telugu">Telugu</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Tibetan">Tibetan</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Turkish">Turkish</option>
                                                <option value="Ukrainian">Ukrainian</option>
                                                <option value="Urdu">Urdu</option>
                                                <option value="Uzbek">Uzbek</option>
                                                <option value="Vietnamese">Vietnamese</option>
                                                <option value="Welsh">Welsh</option>
                                                <option value="Xhosa">Xhosa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formFileSm" class="form-label">Upload document</label>
                                        <input class="form-control px-3" id="formFileMd" type="file" name="attachment">
                                    </div>
                                </div>
                                </div>
                                <div class="row d-none">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Enter Your Message here" class="form-control"></textarea>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="tp-contact-btn mt-10">
                                        <button type="submit" class="reg-tp-btn" name="submitgetQuote"><i class="fa fa-paper-plane"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="card mb-5 shadow-sm">
                            <div class="row p-4">
                                <div class="col-md-4 align-content-center">
                                    <img src="{{ asset('/assets/img/up_icon.svg') }}" class="img-fluid" alt="upload documents">
                                </div>
                                <div class="col-md-8 align-content-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Upload Document</h5>
                                        <p class="card-text">Upload your files to get a quote. We accept Images, PDFs, and Office formats.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-sm">
                            <div class="row p-4">
                                <div class="col-md-4 align-content-center">
                                    <img src="{{ asset('/assets/img/rev_icon.svg') }}" class="img-fluid" alt="Review & Approve">
                                </div>
                                <div class="col-md-8 align-content-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Review & Approve</h5>
                                        <p class="card-text">Get your translation draft, review it, and either give feedback or approve it for final delivery.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-sm">
                            <div class="row p-4">
                                <div class="col-md-4 align-content-center">
                                    <img src="{{ asset('/assets/img/oc_icon.svg') }}" class="img-fluid" alt="Order Completed">
                                </div>
                                <div class="col-md-8 align-content-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Order Completed</h5>
                                        <p class="card-text">Get high-quality translations delivered by email or post, with certified accuracy to meet your requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .end col-xl-5 col-lg-5 -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Get Quote -->
    <!-- CTA Starts -->
    <div class="cta-bg pt-30 pb-30">
      <div class="container space-2">
        <div class="row justify-content-md-center align-items-md-center">
          <div class="col-md-4 col-lg-3 d-none d-md-inline-block">
            <img class="img-fluid" src="{{ asset('/assets/img/cta-img.webp') }}" alt="">
          </div>
          <div class="col-md-8 col-lg-6 offset-lg-1">
            <!-- Title -->
            <div class="mb-5">
              <h2 class="text-white mb-1">Start talking to us today</h2>
              <p class="lead text-light">Contact for more information at <a href="mailto:sales@translationwindows.com">sales@translationwindows.com</a>.<br><a href="tel:(254) 271-4094">(254) 271-4094</a></p>
            </div>
            <!-- End Title -->
            <!-- Button -->
            <a class="btn btn-xs btn-light text-left mb-2 mb-md-0 mr-md-2" href="javascript:void(Tawk_API.toggle())">
              <span class="media align-items-center">
                <span class="fa fa-regular fa-headset fa-3x mr-3"></span>
                <span class="d-block">
                  <span class="d-block">Start Chat Now</span>
                </span>
              </span>
            </a>
            <!-- End Button -->
            <!-- Button -->
            <a class="btn btn-xs btn-light text-left mb-2 mb-md-0" href="tel:(254) 271-4094">
              <span class="media align-items-center">
                <span class="far fa-phone fa-3x mr-3"></span>
                <span class="d-block">
                  <span class="d-block">Call Now</span>
                </span>
              </span>
            </a>
            <!-- End Button -->
          </div>
        </div>
      </div>
    </div>
    <!-- End CTA Section -->
    <!-- Start Services 
    ============================================= -->
    <div class="services-style-three-area default-padding bottom-less bg-gray-secondary bg-cover" style="background-image: url({{ asset('/assets/img/shape/24.png)') }};">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Our Services</h4>
                        <h2 class="title">Empower your business with our services.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-1.webp') }}" alt="">
                            <h4><a href="av-translation.php">Translation</a></h4>
                            <p>
                            We, at Translationwindows, we completely understand that effective communication across languages goes beyond just translation.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="av-translation.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-2.webp') }}" alt="">
                            <h4><a href="av-transcription.php">Transcription</a></h4>
                            <p>
                            Translationwindows excels in providing comprehensive transcription services across a multitude of languages, combining unparalleled accuracy.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="av-transcription.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-3.webp') }}" alt="">
                            <h4><a href="subtitling.php">Subtitling</a></h4>
                            <p>
                                At Translationwindows, we offer expert subtitling services for a wide range of audio and video content in every language.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="subtitling.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
            </div>
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-4.webp') }}" alt="">
                            <h4><a href="proofreading-copy-editing.php">Proofreading & Copy-Editing</a></h4>
                            <p>
                                To ensure your text is clear, accurate, and of a professional calibre, Translationwindows.com provides professional proofreading and copy-editing services.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="proofreading-copy-editing.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-5.webp') }}" alt="">
                            <h4><a href="proofreading-translation.php">Proofreading & Translation Of AI Content</a></h4>
                            <p>
                                Our speciality at Translationwindows.com is editing and translating AI-generated content to make sure it is precise, well-written, and appropriate for the target culture.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="proofreading-translation.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="services-style-three-item">
                       <div class="item-title">
                            <img src="{{ asset('/assets/img/icon/icon-6.webp') }}" alt="">
                            <h4><a href="industry-specific-services.php">Industry-Specific Services</a></h4>
                            <p>
                                Personalised translation and design services made to fit the particular requirements of your sector.
                            </p>
                            <div class="d-flex mt-30">
                                <a href="industry-specific-services.php"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                       </div>
                    </div>
                 </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->

<!-- Start Translation Services 
    ============================================= -->
    <div class="speciality-style-one-area default-padding-bottom">
        <div class="container">
            <div class="row align-center my-3">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h4 class="sub-title">Translation Services</h4>
                    <h5>We provide comprehensive services in translation, and legalization for individuals and businesses.</h5>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-5"><img src="{{ asset('/assets/img/ct.webp') }}" alt=""></div>
                <div class="col-lg-7 px-5"><h2 class="title">Certified Translations </h2>
                    <p class="card-text lead">Get certified, notarised, sworn, and legalised translations—trusted and accepted worldwide!</p>
                    <ul class="list-style-one">
                        <li>Documents Translated and Certified with Precision.</li>   
                        <li>Secure Digital PDF delivery with the option for worldwide shipping.</li>
                        <li>Expert Apostille and Notarisation Services, Trusted Worldwide.</li>

                    </ul>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-5"><img src="{{ asset('/assets/img/pt.webp') }}" alt=""></div>
                <div class="col-lg-7 px-5"><h2 class="title">Professional Translations </h2>
                    <p class="card-text lead">Fast and reliable standard translations tailored for individuals and businesses!</p>
                    <ul class="list-style-one">
                        <li>Expert Translators with Specialized Subject Matter Knowledge.</li>
                        <li>Expert Assistance for Business, Technical, and Legal Documents.</li>
                        <li>Accelerate your translations with AI—faster, smarter, and more cost-effective!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Translation Services -->    
    <!-- Start Speciality 
    ============================================= -->
    <div class="speciality-style-one-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4">
                    <img src="{{ asset('/assets/img/comit.webp') }}" alt="">
                </div>
                <div class="col-xl-7 offset-xl-1 col-lg-8">
                    <div class="speciality-items">
                        <h4 class="sub-title">Our expertise</h4>
                        <h2 class="title">Our commitment <br> is client satisfaction </h2>
                        <div class="d-grid mt-40">
                            <ul class="list-style-two">
                                <li>Translation </li>
                                <li>Transcription</li>
                                <li>Subtitling</li>
                            </ul>
                            <div class="progress-items">
                                <div class="progress-box">
                                    <h5>Translation</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="70">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Transcription</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="95">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Subtitling</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="95">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Speciality -->
    <!-- Start Gallery 
    ============================================= -->
    <div class="gallery-style-one-area bg-gray default-padding d-none">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-9">
                    <div class="site-heading">
                        <h4 class="sub-title">Case Studies</h4>
                        <h2 class="title">Have a view of our amazing projects with our clients</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-3">
                    <div class="project-navigation-items">
                        <!-- Navigation -->
                        <div class="project-swiper-nav">
                            <!-- Pagination -->
                            <div class="project-pagination"></div>
                            <div class="project-button-prev"></div>
                            <div class="project-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="row">
                <div class="gallery-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/5.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">Cyber Security</a></h4>
                                        <span>Technology, IT</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/6.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">IT Counsultancy</a></h4>
                                        <span>Security, Firewall</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/7.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">Analysis of Security</a></h4>
                                        <span>Support, Tech</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                         <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="gallery-style-one">
                                <img src="{{ asset('/assets/img/projects/8.jpg') }}" alt="Image Not Found">
                                <div class="overlay">
                                    <div class="info">
                                        <h4><a href="project-details.html">Business Analysis</a></h4>
                                        <span>Network, Error</span>
                                        <p>
                                            Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                                        </p>
                                    </div>
                                    <a href="project-details.html">Explore <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
    <div class="services-content bg-white default-padding d-none d-md-block">
        <div class="container">
            <div class="about-style-one-items">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="thumb-style-one">
                            <img src="{{ asset('/assets/img/about/1.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 pl-50 pl-md-15 pl-xs-15">
                        <div class="about-style-one-info">
                            <div class="content">
                                <h2 class="title">We have a staff of more than 200 translators and language specialists available to help, and we are fluent in more than 100 languages.</h2>
                                <p>
                                Increase the ease and effectiveness of your communication. Semantix offers linguistic solutions that are tailored to meet all of your company's needs.
                                </p>
                            </div>
                            <ul class="card-list">
                                <li>
                                    <img src="{{ asset('/assets/img/icon/4.png') }}" alt="Image Not Found">
                                    <h5>Award Winning Company</h5>
                                </li>
                                <li>
                                    <h2>3.8 X</h2>
                                    <h5>Economical growth </h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonial-style-two-area bg-dark default-padding text-light bg-cover d-none" style="background-image: url({{ asset('/assets/img/shape/5.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-two-info">
                        <div class="icon">
                            <img src="{{ asset('/assets/img/quote.png') }}" alt="Image Not Found">
                        </div>
                        <h2>Over 50K clients and 5,000 projects across the globe.</h2>
                        <div class="review-card">
                            <h6>Excellent 10,260+ Reviews</h6>
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>4.8/5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-60 pl-md-15 pl-xs-15">
                    <div class="testimonial-style-two-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="text-info">
                                            <p>
                                                “The accuracy and expertise of Translationwindows' medical translation service far above our expectations. The group ensured uniformity and clarity in all documents by precisely translating difficult medical content.
                                            </p>
                                        </div>
                                        <div class="content">
                                            <div class="thumb">
                                                <img src="{{ asset('/assets/img/team/v1.webp') }}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Office Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="text-info">
                                            <p>
                                                “Translationwindows offered quick and precise transcribing services to Mitchell, Sanders Law Firm. They are our first choice for legal transcriptions due to their dependability and meticulous attention to detail and professionalism.
                                            </p>
                                        </div>
                                        <div class="content">
                                            <div class="thumb">
                                                <img src="{{ asset('/assets/img/team/v2.webp') }}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Isabella Bu Spar</h4>
                                                <span>Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    
    <div class="modal fade" id="langModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content rounded-5 overflow-hidden">
                <div class="modal-body p-0">
                    <div class="row text-center">
                        <div class="col">
                            <div class="separator">
                                <a href="javascript:;" class="usflag" onclick="setLanguage('english')"></a><a class="spflag" onclick="setLanguage('español')" href="javascript:;">&nbsp;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection