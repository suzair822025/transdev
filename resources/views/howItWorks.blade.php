@extends('layouts.app')

@section('content')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset("/assets/img/1920x1080/01.jpg")}}">
    <div class="parallax-content container innerpage">
        <h1 class="carousel-title">How It Works</h1>
        <p class="white-text">We make it easy, quick, and affordable to get quality Translation and Transcription services.</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->

<!-- Promo Section -->
<div class="promo-section1 overflow-h">
    <div class="container my-5">
        <div class="col-md-8 col-lg-offset-2">
            <ul class="nav nav-tabs custom-tabs">
                <li class="active col-md-6 mx-4 my-2"><a data-toggle="tab" href="#Howitworks"><span>How It Works?</span></a></li>
                <li class="col-md-6 my-2"><a data-toggle="tab" href="#Qualitystandards"><span>Quality Standards</span></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="tab-content text-left px-4">
            <div id="Howitworks" class="tab-pane fade in active">
                <h2><br>How it works?</h2>
                <p><strong>Mode Of Functioning</strong></p>
                <p><h3 class="h3-small"><strong>1- You Place the Order on Our Accessible Podium </strong></h3>
                    Upload your content to Leebon, select the right languages and service Package. That’s it – there are no hidden fees so the amount you see is what you pay. To make it even easier, we accept credit cards, PayPal and bank transfer.
                </p>
                <p><h3 class="h3-small"><strong>2- Your Order Will Be Handled by an Experienced Translator</strong></h3>
                    We will assign the most relevant translator to your project, guaranteeing that we will meet your project deadline and quality requirements. All of Leebon' translators undergo a rigorous selection process and their work is continuously monitored to ensure that it meets the highest quality standards.
                </p>
                <p><h3 class="h3-small"><strong>3- We Conduct a Quality Control Check</strong></h3>
                    Our project managers oversee your project from start to finish, making sure everything runs smoothly. Our platform also lets you communicate and clarify any points and answer questions. For extra peace of mind, you can ask one of our experienced proofreaders to check over the translator’s work. Once completed, you can rate the project, allowing us to gather feedback and improve the quality of our translator base
                </p>
                <p><h3 class="h3-small"><strong>4- You Receive Your Translation within TAT </strong></h3>when you launch your translation/transcription on the platform, you’ll receive an estimated delivery time. You can even specify a deadline when placing your order. For urgent projects, you can select the rush express option, which means that your project will be assigned with the highest priority.
                </p>
            </div> <!--   ##Howitworks   -->

            <div id="Qualitystandards" class="tab-pane fade in">
                <h2><br>How we perpetuate our quality standards</h2>
                <p><h3 class="h3-small"><strong>Strict Translator Selection Process</strong></h3>Only one out of four applicants are selected to be part of Leebon’s network. For the Enterprise level, we make a deeper qualification check by looking at the applicant’s academic background, professional experience and writing samples. They are then tested by our senior language managers in order to further validate their expertise.
                </p>

                <p><h3 class="h3-small"><strong>Ongoing Quality Control</strong></h3>Our quality control doesn’t just stop at the selection process. Our professional project managers supervise all of our projects to make sure that everything runs smoothly and that the submitted work matches your quality requirements.
                </p>

                <p><h3 class="h3-small"><strong>Worker Evaluation</strong></h3>Clients rate every project that they receive, allowing us to gain valuable feedback and improve the quality of our network of workers.
                </p>

                <p><h3 class="h3-small"><strong>Extra Proofreading</strong></h3>To ensure consistency and accuracy of complex orders or multiple documents, we offer a supplementary proofreading service. Our internal managers verify that the submitted text is error-free and uses the required vocabulary and tone across all documents.

                <p><h3 class="h3-small"><strong>Expertise Validation</strong></h3>Our client’s satisfaction is at the heart of everything that we do here, which is why more than 10,000 clients trust Leebon with their transcription/translation projects.
                We Put Your Satisfaction First </p>

                <p><h3 class="h3-small"><strong>We Put Your Satisfaction First</strong></h3>Our client’s satisfaction is at the heart of everything that we do here, which is why more than 10,000 clients trust Leebon with their translation projects.</p>
            </div>
        </div>    
    </div>
</div>
<!-- End Promo Section -->
<!--========== END PAGE LAYOUT ==========-->

@endsection