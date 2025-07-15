@include('layouts.header')
 <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white sticked">
            <div class="container d-flex align-items-center">            
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
                <div class="spacer" style="display:inline-block; padding:30px 15px;"></div>
                <div class="d-inline-block justify-content-end ms-lg-3 mt-lg-0 mt-sm-3 mobile-phone-wrapper">
                    <a href="tel:(281) 205-3932"><span class="phone-header">(281) 205-3932</span></a>
                </div>
                <!-- /.navbar-collapse -->

            </div>   
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
@yield('content')
@include('layouts.footer')
