@include('layouts.header')
 <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white sticked">
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
                                <li><a href="av-transcription"><i class="fa fa-arrow-right"></i>Audio/Video Transcription</a></li>
                                <li><a href="av-translation"><i class="fa fa-arrow-right"></i>Audio/Video Translation</a></li>
                                <li><a href="doc-translation"><i class="fa fa-arrow-right"></i>Document Translation</a></li>
                                <li><a href="subtitling"><i class="fa fa-arrow-right"></i>Subtitling</a></li>
                                <li><a href="prf-copyedit"><i class="fa fa-arrow-right"></i>Proofreading & copy-editing</a></li>
                                <li><a href="prftrans-ai"><i class="fa fa-arrow-right"></i>Proofreading and translation of AI content</a></li>
                                <li><a href="ind-specservices"><i class="fa fa-arrow-right"></i>Industry-specific services</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="how-it-works" class="">How It works</a>
                        </li>
                        <li>
                            <a href="career" class="">Career</a>
                        </li>
                        <li><a href="contact-us">contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <a class="btn circle btn-gradient animation" href="#" onclick="smoothScroll(event, 'getquoteForm')">Get A Quote</a>
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
