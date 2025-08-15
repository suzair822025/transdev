<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Translation Windows offers professional translation services with high accuracy and fast delivery. Get quality translations for documents, websites, and more." />
    <meta name="keywords" content="translation services, document translation, professional translators, language translation, website translation, fast translation, accurate translation" />
    <meta name="author" content="Translation Windows" />
    <meta name="robots" content="index, follow" />
    <!-- ========== Page Title ========== -->
    <title>Translation Windows</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset ('/assets/img/favicon.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

     <!-- ========== Start Stylesheet ========== -->
    <link rel="preload" href="{{ asset('/assets/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}"></noscript>
     <link rel="preload" href="{{ asset('/assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}"></noscript>
    @if (!request()->is('/'))
    <link rel="preload" href="{{ asset('/assets/css/font-awesome.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}"></noscript>
    @endif
    <!-- <link href="{{ asset ('/assets/css/magnific-popup.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/assets/css/swiper-bundle.min.css') }}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('/assets/css/swiper-bundle.min.css') }}" rel="stylesheet"></noscript>
    <link href="{{ asset('/assets/css/animate.min.css') }}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('/assets/css/animate.min.css') }}" rel="stylesheet"></noscript>
    <link rel="preload" href="{{ asset('/assets/css/validnavs.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/assets/css/validnavs.css') }}"></noscript>
    <link href="{{ asset('/assets/css/helper.css') }}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('/assets/css/helper.css') }}" rel="stylesheet"></noscript>
    <link rel="preload" href="{{ asset('/assets/css/unit-test.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/assets/css/unit-test.css') }}"></noscript>
    <!-- ========== End Stylesheet ========== --> 

    @yield('style')
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSBGK49H');</script>
    <!-- End Google Tag Manager -->
    <link rel="preload" href="{{ asset('assets/img/hero_bg_1920.avif') }}" as="image" media="(min-width: 769px)" fetchpriority="high">
    <link rel="preload" href="{{ asset('assets/img/hero_bg_640.avif') }}" as="image" media="(max-width: 768px)"  fetchpriority="high">
    <link rel="preload" href="{{ asset('assets/img/hro_img.avif') }}" as="image" type="image/avif">
    <style>
        .lead { font-size: 1.25rem; font-weight: 300; }
        .hero-cont {
            background-image: url('{{ asset('assets/img/hero_bg_1920.avif') }}');
            background-size: cover;
            background-position: center;
        }
        @media (max-width: 768px) {
            .hero-cont {
                background-image: url('{{ asset('assets/img/hero_bg_640.avif') }}');
            }
        }
    </style>     
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSBGK49H"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php // include_once("analyticstracking.php") ?>
@if (session()->has('registration'))
    <div class="alert alert-success alert-dismissable" style="position:fixed; z-index: 9999; left: 50%; -webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);transform: translateX(-50%);" role="alert">
        Registration successful. We have sent an email about your registration & credentials. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif


