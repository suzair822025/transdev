@include('layouts.header')
 <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">
            <div class="container d-flex justify-content-between align-items-center">            
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="{{ asset('/assets/img/logo-light.png') }}" class="logo logo-display" alt="TranslationWindows Logo">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo logo-scrolled" alt="TranslationWindows Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="collapse-header">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="TranslationWindows Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="index.php" class="active">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="av-transcription.php"><i class="fa fa-arrow-right"></i>Audio/Video Transcription</a></li>
                                <li><a href="av-translation.php"><i class="fa fa-arrow-right"></i>Audio/Video Translation</a></li>
                                <li><a href="doc-translation.php"><i class="fa fa-arrow-right"></i>Document Translation</a></li>
                                <li><a href="subtitling.php"><i class="fa fa-arrow-right"></i>Subtitling</a></li>
                                <li><a href="proofreading-copy-editing.php"><i class="fa fa-arrow-right"></i>Proofreading & copy-editing</a></li>
                                <li><a href="proofreading-translation.php"><i class="fa fa-arrow-right"></i>Proofreading and translation of AI content</a></li>
                                <li><a href="industry-specific-services.php"><i class="fa fa-arrow-right"></i>Industry-specific services</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="how-it-works.php" class="">How It works</a>
                        </li>
                        <li>
                            <a href="career.php" class="">Career</a>
                        </li>
                        <li><a href="contact-us.php">contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="contact">
                                <div class="call">
                                    <div class="icon">
                                        <i class="fas fa-comments-alt-dollar"></i>
                                    </div>
                                    <div class="info">
                                        <p class="mb-0"><a href="mailto:sales@translationwindows.com" class="p-0"><span class="text-lowercase">sales@translationwindows.com</span></a></p>
                                        <h5><a class="text-capitalize el-content uk-button uk-button-default uk-button-small" href="#">Live Chat</a></h5>
                                        <p>(281) 205-3932</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>
            </div>   
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
@yield('content')
@include('layouts.footer')