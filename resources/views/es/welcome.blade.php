@extends('layouts.app')
@section('content')
<style>
        #card-button-container{
            margin-top: 12px;
            display:none;
        }
</style>
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
                                        <span class="mt-n4">We offer certified and business translation services that are reliable, affordable, and easy to order, ensuring accuracy and fast delivery.</span>
                                        <div class="shape-circle d-none"></div>
                                    </div>
                                </div>
                                <div id="signup-form" class="col-lg-5 mt-1" style="text-align:right;">
                                    <div class="mt-20">&nbsp;</div>
                                    <img src="{{ asset('/assets/img/hro_img.avif') }}" alt="Translation windows empowering success in technology since 2014
" width="300">
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
                    
                <div class="row">
                <div class="col-md-8">
                    <!-- <h2>Get a Quote & Place Your Order</h2> -->
                    <form id="QuoteForm">
                        
                    <input type="hidden" name="service_type_amount" class="service-type-amount" value="0" />
                        <input type="hidden" name="number_of_pages_anount" class="number-of-pages-amount" value="0" />
                        <input type="hidden" name="estimated_delivery_amount" class="estimated-delivery-amount" value="0" />
                        <input type="hidden" name="sum_of_all_amount" class="sum-of-all-amount" value="0" />
                       
                        <input type="hidden" name="request_reference" value="{{$randomString}}" />
                        <div class="row">
                            <div class="col-md-6" style="display:none;">
                                <label>Who You Are: <span style="color:red;">*</span></label><br>
                                <label class="radio-inline"><input type="radio" name="who_name" value="1" checked /> Individual</label>
                                <label class="radio-inline"><input type="radio" name="who_name" value="2" /> Business Customer</label>
                                <label class="radio-inline"><input type="radio" name="who_name" value="3" /> Translator</label>
                            </div>

                            <div class="col-md-6 form-check form-check-inline">
                                <label class="w-100">Service Type: <span style="color:red;">*</span></label><br>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="service-type-cls w-100 align-middle cust-radios" name="service_type" value="1" required> <span class="">Translate</span></label>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="service-type-cls w-100 align-middle cust-radios" name="service_type" value="2" required> <span class="">Transcribe</span></label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Translate From: <span style="color:red;">*</span></label>
                                <select name="translate_from" class="form-control" required>
                                    <option value="" selected>Select Language</option>
                                    @forelse($languages as $l)
                                     <option value="{{$l->id}}">{{$l->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label>Translate To: <span style="color:red;">*</span></label>
                                <select name="translate_to" class="form-control" required>
                                <option value="" selected>Select Language</option>
                                    @forelse($languages as $l)
                                     <option value="{{$l->id}}">{{$l->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Number of Pages: <span style="color:red;">*</span></label>
                                <input type="number" name="page_number" class="page-number-clse form-control" placeholder="Enter number of pages" required>
                                <span>1 page = 250 words max</span>
                                <span data-toggle="tooltip" data-placement="top" title="Enter the number of pages you need to translate. One page is approximately 250 words."><i class="fa fa-info-circle"></i></span>

                            </div>

                            <div class="col-md-6">
                                <label>Upload File: <span style="color:red;">*</span></label>
                                <input type="file" name="file_name" class="file-upload-cls form-control"  required>
                                <div id="uploadStatus" class="mt-3"></div>
                                <span>File Upload info </span>                                <span data-toggle="tooltip" data-placement="top" title="Our word count tool checks supported file types and estimates the number of words or pages. One page is about 250 words.

Please review the word count before placing your order. If our project managers find major differences in the count, they may contact you to update your quote.

Supported file types: docx, doc, xlsx, pptx, txt, xliff, csv, xml, html, pdf, json, bmp, pnm, png, jfif, jpeg, tiff."><i class="fa fa-info-circle"></i></span>

                                <input type="hidden" name="file_id" class="record-file-id" value="0" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 form-check form-check-inline">
                                <label class="w-100">Estimated Delivery: <span style="color:red;">*</span></label><br>
                                <label class="radio-inline d-md-inline d-blockw-25"><input type="radio" class="delivery-type-cls w-100 align-middle cust-radios" name="delivery_type" value="1" required> Standard</label>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="delivery-type-cls w-100 align-middle cust-radios" name="delivery_type" value="2" required> Priority</label>
                                <label class="radio-inline d-md-inline d-block"><input type="radio" class="delivery-type-cls w-100 align-middle cust-radios" name="delivery_type" value="3" required> Urgent</label>
                            </div>

                            <div class="col-md-6">
                                <label>Name: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="customer_name" placeholder="Enter your name" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Email: <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="col-md-6">
                                <label>Phone: <span style="color:red;">*</span></label>
                                <input type="tel" class="form-control" name="phone"  pattern="^\(\d{3}\) \d{3}-\d{4}$" placeholder="(123) 456-7890"  required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>Comments:</label>
                                <textarea class="form-control" name="comments" rows="3" placeholder="Enter your comments"></textarea>
                            </div>
                        </div>

                        <input type="submit" id="HiddenSubmit" style="display:none;" /> 
                        <div class="text-center mt-4">
                        </div>
                    </form>
                    
                   
                </div>
                <div class="col-md-4">
                <div class="order-summary">
                        <h4>Order Summary</h4>
                        <p><strong>Service Type:</strong> <span class="service-type-container"></span></p>
                        <p><strong>Number of Pages:</strong> <span class="pages-count">$0.00</span></p>
                        <p><strong>Download Link:</strong> <a href="javascript:;" class="uploaded-file-url" style="display:none;" target="_blank">Download File</a></p>
                        <p><strong>Estimated Delivery:</strong> <span class="delivery-time">$0.00</span></p>
                        <p><strong>Total Amount:</strong> <span class="total-amount">$0.00</span></p>       
                        <button type="button" class="btn-form-submit btn btn-primary">Place Order</button>
                        <!-- <div id="paypal-button-container" data-id="0"></div> -->
                        <div id="card-button-container"  data-id="0"></div>
                        <div class="alert alert-success success-msg" style="display:none;font-size: 20px;font-family: ui-serif;"><h3 style="font-family: ui-serif;text-align:center;color:#3c763d;">Thank You</h3>Your order has been successfully placed! Thank you for choosing us. Our translation agent will reach out to you shortly.
                        
                    </div>
                    </div>
                </div>
            </div>














































































































































































































































































































































































































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
@section('scripts')
<script src ="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://sandbox.paypal.com/sdk/js?client-id=AcHr6j-cjCKAsuABcrFWm1i1HGstx6cKl_GfNie-Peskv3QVzmxAEjqr1g6rvgoj6LI-RaH5Hmmvc8A5&currency=USD"></script>

<script>

   
//$('[data-toggle="tooltip"]').tooltip(); 

paypal.Buttons({
    fundingSource: paypal.FUNDING.CARD, // Card payment button
    style: {
        layout: 'vertical',
        color: 'black', // Allowed values: 'black' or 'white'
        shape: 'rect',
        label: 'pay'
    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: parseFloat($(".sum-of-all-amount").val())  // Payment amount in USD
                }
            }],
            application_context: {
                shipping_preference: "NO_SHIPPING" // Explicitly disable shipping
            }
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {

            Swal.fire({
  title: "Thank You!",
  text: "Your order has been successfully placed! Thank you for choosing us. Our translation agent will reach out to you shortly.",
  icon: "success"
});

            let payerName = details.payer.name.given_name + " " + details.payer.name.surname;
            let payerEmail = details.payer.email_address;
            let payerID = details.payer.payer_id;
            let transactionID = details.id;
            let status = details.status;
            let purchaseAmount = details.purchase_units[0].amount.value;
            let currencyCode = details.purchase_units[0].amount.currency_code;
            let createTime = details.create_time;
            let updateTime = details.update_time;
            let RequestID = $("#card-button-container").attr("data-id");

            $.ajax({
                type:'POST',
                url:"{{route('savepaymentinfo')}}",
                data:{
                    payerName:payerName,
                    payerEmail:payerEmail,
                    payerID:payerID,
                    transactionID:transactionID,
                    status:status,
                    purchaseAmount:purchaseAmount,
                    currencyCode:currencyCode,
                    createTime:createTime,
                    updateTime:updateTime,
                    RequestID:RequestID
                }
            }).done(function(resp){
                    // console.log(resp);

                    

                    $("#card-button-container").hide();

                    $(".success-msg").show();

                    $("#QuoteForm")[0].reset();

                    $("html, body").animate({ scrollTop: 0 }, "slow");

                    setTimeout(function(){

                        location.reload();

                    },10000);

                    // $("#QuoteForm input[type='file']").val('');
                    // $("#uploadStatus").hide();
                    // $(".file-upload-cls").removeAttr("disabled");
                    // $(".service-type-container").text('');
                    // $(".pages-count").text('');
                    // $(".uploaded-file-url").attr("javascript:;");
                    // $(".uploaded-file-url").hide();
                    // $(".delivery-time").text('');
                    // $(".total-amount").text('');
                    


            }).fail(function(resp){
                console.log(resp);
            });
            
            console.log("Request Id:", RequestID);
            console.log("Payer Name:", payerName);
            console.log("Payer Email:", payerEmail);
            console.log("Payer ID:", payerID);
            console.log("Transaction ID:", transactionID);
            console.log("Status:", status);
            console.log("Purchase Amount:", purchaseAmount);
            console.log("Currency Code:", currencyCode);
            console.log("Create Time:", createTime);
            console.log("Update Time:", updateTime);
        });
    },
    onError: function(err) {
        console.error('Error during transaction:', err);
    }
}).render('#card-button-container');


/*paypal.Buttons({
            
            style: {
                layout: 'vertical',
                color: 'blue',
                shape: 'rect',
                label: 'pay'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: parseFloat($(".sum-of-all-amount").val()) // Set the payment amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    //alert('Transaction completed by ' + details.payer.name.given_name);
                    // console.log(details); // Log transaction details
            let payerName = details.payer.name.given_name + " " + details.payer.name.surname;
            let payerEmail = details.payer.email_address;
            let payerID = details.payer.payer_id;
            let transactionID = details.id;
            let status = details.status;
            let purchaseAmount = details.purchase_units[0].amount.value;
            let currencyCode = details.purchase_units[0].amount.currency_code;
            let createTime = details.create_time;
            let updateTime = details.update_time;
            let RequestID = $("#paypal-button-container").attr("data-id");

            $.ajax({
                type:'POST',
                url:"{{route('savepaymentinfo')}}",
                data:{
                    payerName:payerName,
                    payerEmail:payerEmail,
                    payerID:payerID,
                    transactionID:transactionID,
                    status:status,
                    purchaseAmount:purchaseAmount,
                    currencyCode:currencyCode,
                    createTime:createTime,
                    updateTime:updateTime,
                    RequestID:RequestID
                }
            }).done(function(resp){
                    console.log(resp);
            }).fail(function(resp){
                console.log(resp);
            });
            
            console.log("Request Id:", RequestID);
            console.log("Payer Name:", payerName);
            console.log("Payer Email:", payerEmail);
            console.log("Payer ID:", payerID);
            console.log("Transaction ID:", transactionID);
            console.log("Status:", status);
            console.log("Purchase Amount:", purchaseAmount);
            console.log("Currency Code:", currencyCode);
            console.log("Create Time:", createTime);
            console.log("Update Time:", updateTime);
                });
            },
            onError: function(err) {
                console.error('Error processing payment', err);
            }
        }).render('#paypal-button-container');
*/
   $(document).ready(function(){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        function Total()
        {
            var servicetype = parseInt($(".service-type-amount").val());
            var pagecount = parseInt($(".number-of-pages-amount").val());
            var estimateddelivery = parseInt($(".estimated-delivery-amount").val());

            var sum = servicetype + pagecount + estimateddelivery;

            $(".sum-of-all-amount").val(sum);

            $(".total-amount").text("$"+sum);
        }
    
        $(document).on('click','.btn-form-submit',function(){

            if ($("#QuoteForm")[0].checkValidity()) {
            
                $(".btn-form-submit").text("Processing...");

                
                $.ajax({
                    url: "{{ route('saverequest') }}", // Laravel route
                    type: "POST",
                    data: $("#QuoteForm").serialize(),
                    // processData: false,
                    // contentType: false,
                    // beforeSend: function() {
                    //     $("#uploadStatus").html("<p class='text-info'>Uploading...</p>");
                    // },
                    success: function(resp) {
                       $("#card-button-container").attr("data-id",resp.request_id);
                       $("#card-button-container").show();
                       $(".btn-form-submit").hide();
                       $(".btn-form-submit").text("Place Order");
                    },
                    error: function(xhr) {
                        $(".btn-form-submit").text("Place Order");
                        //$("#uploadStatus").html("<p class='text-danger'>Error: " + xhr.responseText + "</p>");
                    }
                });


                } else {
                    $(".btn-form-submit").text("Place Order");
                    $("#HiddenSubmit").trigger("click");
                }

        });

        $(".file-upload-cls").change(function() {
            $(".uploaded-file-url").hide();
                var formData = new FormData();
                var fileInput = this.files[0]; // Get the selected file

                if (!fileInput) {
                    $("#uploadStatus").html("<p class='text-danger'>Please select a file.</p>");
                    return;
                }
                var ReqRef = $("input[name=request_reference]").val();
                formData.append("request_reference", ReqRef);
                formData.append("file_name", fileInput);
               // formData.append("_token", "{{ csrf_token() }}"); // Laravel CSRF Token

                $.ajax({
                    url: "{{ route('uploadfile') }}", // Laravel route
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $("#uploadStatus").html("<p class='text-info'>Uploading...</p>");
                    },
                    success: function(response) {
                        if (response.success) {
                            $(".uploaded-file-url").attr("href",response.file_path);
                            $(".uploaded-file-url").show();
                            $(".record-file-id").val(response.file_id);
                            if(response.file_id > 0)
                        {
                            $(".file-upload-cls").removeAttr("required");
                            $(".file-upload-cls").attr("disabled",true);
                        }
                            $("#uploadStatus").html("<p class='text-success'>" + response.message + "</p>");
                        } else {
                            $("#uploadStatus").html("<p class='text-danger'>" + response.message + "</p>");
                        }
                    },
                    error: function(xhr) {
                        $("#uploadStatus").html("<p class='text-danger'>Error: " + xhr.responseText + "</p>");
                    }
                });
            });

        $(".service-type-cls").click(function(){

            var serviceAmount = 0;
            var serviceType = $(this).val();
            var text = "";
            if(serviceType == 1)
            {
                text = "Translate";
                serviceAmount = 0;
            }
            if(serviceType == 2)
            {
                text = "Transcribe";
                serviceAmount = 0;
            }

            $(".service-type-amount").val(serviceAmount);

            $(".service-type-container").text(text);

            Total();

        });

        $(document).on('input','.page-number-clse',function(){
           
            var page = parseInt($(this).val());
            var amount = 20;
            $(".pages-count").text("");
            $(".number-of-pages-amount").val('0');
            if(page > 0)
            {
                var cls= page * amount;
                $(".number-of-pages-amount").val(cls);
                $(".pages-count").text(page + " ( $"+cls+" )");
            }

            Total();

        });

        $(".delivery-type-cls").click(function(){

            var type = $(this).val();

            var txt ="";

            var amount = 0;

            if(type == 1)
            {
                txt ="Standard ( +$10 )";
                amount = 10;
            }
            if(type == 2)
            {
                txt ="Priority ( +$20 )";
                amount = 20;
            }
            if(type == 3)
            {
                txt ="Urgent ( +$30 )";
                amount = 30;
            }

            $(".estimated-delivery-amount").val(amount);

            $(".delivery-time").text(txt);

            Total();

        });

        
   });
</script>
@stop