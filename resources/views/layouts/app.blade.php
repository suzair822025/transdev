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
                    <a class="navbar-brand" href="{{ url('/') }}">
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
                            <a href="{{ url('/') }}" class="active">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('av-transcription') }}"><i class="fa fa-arrow-right"></i>Audio/Video Transcription</a></li>
                                <li><a href="{{ url('av-translation') }}"><i class="fa fa-arrow-right"></i>Audio/Video Translation</a></li>
                                <li><a href="{{ url('doc-translation') }}"><i class="fa fa-arrow-right"></i>Document Translation</a></li>
                                <li><a href="{{ url('subtitling') }}"><i class="fa fa-arrow-right"></i>Subtitling</a></li>
                                <li><a href="{{ url('prf-copyedit') }}"><i class="fa fa-arrow-right"></i>Proofreading & copy-editing</a></li>
                                <li><a href="{{ url('prftrans-ai') }}"><i class="fa fa-arrow-right"></i>Proofreading and translation of AI content</a></li>
                                <li><a href="{{ url('ind-specservices') }}"><i class="fa fa-arrow-right"></i>Industry-specific services</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('how-it-works') }}" class="">How It works</a>
                        </li>
                        <li>
                            <a href="{{ url('career') }}" class="">Career</a>
                        </li>
                        <li><a href="{{ url('contact-us') }}">contact</a></li>
                        <li>
                            <div class="langdropdown-container">
                                <div class="langdropdown-selected" id="langdropdown-selected">
                                    <img id="selected-flag" src="https://flagcdn.com/us.svg" alt="US Flag" class="flags">
                                    <span id="selected-text">English</span>
                                    <div class="langdropdown-arrow"><i class="fa fa-chevron-down"></i></div>
                                </div>
                                <div class="langdropdown-options" id="langdropdown-options">
                                    <div class="langdropdown-option" data-lang="en" data-flag="https://flagcdn.com/us.svg"> 
                                        <img src="https://flagcdn.com/us.svg" alt="US Flag" class="flags"> English
                                    </div>
                                    <div class="langdropdown-option" data-lang="es" data-flag="https://flagcdn.com/es.svg">
                                        <img src="https://flagcdn.com/es.svg" alt="Spanish Flag" class="flags"> Español
                                    </div>
                                </div>
                            </div> <!-- ..dropdown-container -->
                        </li>
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
