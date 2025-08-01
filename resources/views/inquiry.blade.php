@extends('layouts.app')

@section('content')
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset("/assets/img/1920x1080/01.jpg")}}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">FAQS </h1>
        <p class="white-text">&nbsp;</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<div class="section-seperator my-5">
    <div class="content-lg container space20px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h2 class="title">We’d Love to Hear From You</h1>
                <p>Please fill out the form below, and we’ll get back to you shortly.</p>
                <div id="signup-form" class="col-lg-12 my-lg-5 mb-30">
                    @if(session('success'))
                        <div class="alert alert-success" style="color: green;">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" style="color: red;">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('inquiry.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row tp-gx-10">
                            <div class="col-md-6">
                                <div class="tp-contact-input">
                                    <input name="name" type="text" placeholder="Your Name*" id="validationCustom01" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-contact-input">
                                    <input name="email" type="email" placeholder="Email Address*" id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-contact-input" style="display: block;">
                                    <select name="service_type" class="wide" id="validationCustom03" required>
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
                                    <input name="phone" type="text" placeholder="Phone Number" id="validationCustom04">
                                </div>
                            </div>
                            <div class="col-md-6 extra-inputs d-none">
                                <div class="tp-contact-input">
                                    <input name="language_from" type="text" placeholder="Source Language" id="validationCustom05">
                                </div>
                            </div>
                            <div class="col-md-6 extra-inputs d-none">
                                <div class="tp-contact-input">
                                    <input name="language_to" type="text" placeholder="Target Language" id="validationCustom06">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="tp-contact-input">
                                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="document" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                    <small>Max file size: 50MB</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tp-contact-input">
                                    <textarea name="message" placeholder="Enter Your Message here"></textarea>
                                </div>
                            </div>
                            <div class="tp-contact-btn mt-10 text-center">
                                <button type="submit" class="btn btn-primary reg-tp-btn rbutton w-100" name="submitHeroReg">Submit</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        ////	Enable Source/Target Language Fields For Signup Form Starts	////
                        document.addEventListener('DOMContentLoaded', function () {
                            const serviceSelect = document.querySelector('select[name="service_type"]');
                            const extraInputs = document.querySelectorAll('.extra-inputs');

                            const triggerOptions = [
                                "Audio/Video Transcription",
                                "Audio/Video Translation",
                                "Document Translation"
                            ];

                            serviceSelect.addEventListener('change', function () {
                                const selected = this.value;
                                if (triggerOptions.includes(selected)) {
                                    extraInputs.forEach(el => el.classList.remove('d-none'));
                                } else {
                                    extraInputs.forEach(el => el.classList.add('d-none'));
                                }
                            });
                        });
                    ////	Enable Source/Target Language Fields For Signup Form Ends	////
                    </script>
                    <p class="ajax-response"></p> 
                </div> <!-- ##signup-form -->
            </div>
        </div>
    </div> <!-- ..content-lg container space20px -->
</div>

<!--========== END PAGE LAYOUT ==========-->
@endsection
