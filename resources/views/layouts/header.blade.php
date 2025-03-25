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
    <link href="{{ asset ('/assets/css/bootstrap.min.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/font-awesome.min.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/magnific-popup.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/swiper-bundle.min.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/animate.min.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/validnavs.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/helper.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/unit-test.css') }}" rel="stylesheet" defer>
    <link href="{{ asset ('/assets/css/style.css') }}" rel="stylesheet" defer>
    <!-- ========== End Stylesheet ========== -->

    @yield('style')
    
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
<?php // include_once("analyticstracking.php") ?>
@if (session()->has('registration'))
    <div class="alert alert-success alert-dismissable" style="position:fixed; z-index: 9999; left: 50%; -webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);-o-transform: translateX(-50%);transform: translateX(-50%);" role="alert">
        Registration successful. We have sent an email about your registration & credentials. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif


