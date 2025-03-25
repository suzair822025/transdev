<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CommonController::class)->group(function () {
    Route::get('/services', 'services')->name('services');
    Route::get('/av-transcription', 'avtranscription')->name('avtranscription');
    Route::get('/av-translation', 'avtranslation')->name('avtranslation');
    Route::get('/doc-translation', 'doctranslation')->name('doctranslation');
    Route::get('/how-it-works', 'howItWorks')->name('howItWorks');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/subscribe', 'subscribe')->name('subscribe');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/faqs', 'faqs')->name('faqs');
    Route::get('/careers', 'careers')->name('careers');
    Route::get('/order', 'order')->name('order');
    Route::get('/get-quote', 'getQuote')->name('get-quote');
    Route::get('/translation-landing', 'translationLanding')->name('translation-landing');
    Route::get('/pricestable', 'pricestable')->name('pricestable');
});