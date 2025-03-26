<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommonController;

use App\Http\Controllers\QuoteController;

use DB;

use Illuminate\Support\Str;

Route::get('/', function () {
    $languages = DB::table('languages')->get();
    $randomString = Str::random(32);
    return view('welcome',compact('languages','randomString'));
});

Route::controller(CommonController::class)->group(function () {
    Route::get('/services', 'services')->name('services');
    Route::get('/av-transcription', 'avtranscription')->name('avtranscription');
    Route::get('/av-translation', 'avtranslation')->name('avtranslation');
    Route::get('/doc-translation', 'doctranslation')->name('doctranslation');
    Route::get('/subtitling', 'subtitling')->name('subtitling');
    Route::get('/prf-copyedit', 'prfcopyedit')->name('prfcopyedit');
    Route::get('/prftrans-ai', 'prftransaicontent')->name('prftransaicontent');
    Route::get('/ind-specservices', 'indspecservices')->name('indspecservices');
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

Route::controller(QuoteController::class)->group(function () {
    Route::post('/upload-file', 'UploadRequestFile')->name('uploadfile');
    Route::post('/save-request', 'SaveRequest')->name('saverequest');
    Route::post('/save-payment-info', 'SavePaymentInfo')->name('savepaymentinfo');
    Route::get('/test', 'EmailTest')->name('test');
});