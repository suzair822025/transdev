<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommonController;

use App\Http\Controllers\QuoteController;

use App\Http\Controllers\SpanishcommonController;


use DB;

use Illuminate\Support\Str;

Route::get('/', function () {
    $languages = DB::table('languages')->get();
    $randomString = Str::random(32);
    return view('welcome',compact('languages','randomString'));
});

Route::get('/es', function () {
    $languages = DB::table('languages')->get();
    $randomString = Str::random(32);
    return view('es.welcome',compact('languages','randomString'));
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
    Route::get('/career', 'careers')->name('careers');
    Route::get('/order', 'order')->name('order');
    Route::get('/get-quote', 'getQuote')->name('get-quote');
    Route::get('/translation-landing', 'translationLanding')->name('translation-landing');
    Route::get('/pricestable', 'pricestable')->name('pricestable');
    Route::get('/es/welcome', 'welcome')->name('welcome');
});

Route::controller(SpanishcommonController::class)->group(function () {
    Route::get('/es/services', 'services')->name('services');
    Route::get('/es/av-transcription', 'avtranscription')->name('avtranscription');
    Route::get('/es/av-translation', 'avtranslation')->name('avtranslation');
    Route::get('/es/doc-translation', 'doctranslation')->name('doctranslation');
    Route::get('/es/subtitling', 'subtitling')->name('subtitling');
    Route::get('/es/prf-copyedit', 'prfcopyedit')->name('prfcopyedit');
    Route::get('/es/prftrans-ai', 'prftransaicontent')->name('prftransaicontent');
    Route::get('/es/ind-specservices', 'indspecservices')->name('indspecservices');
    Route::get('/es/how-it-works', 'howItWorks')->name('howItWorks');
    Route::get('/es/pricing', 'pricing')->name('pricing');
    Route::get('/es/contact-us', 'contact')->name('contact');
    Route::get('/es/subscribe', 'subscribe')->name('subscribe');
    Route::get('/es/privacy', 'privacy')->name('privacy');
    Route::get('/es/faqs', 'faqs')->name('faqs');
    Route::get('/es/career', 'careers')->name('careers');
    Route::get('/es/order', 'order')->name('order');
    Route::get('/es/get-quote', 'getQuote')->name('get-quote');
    Route::get('/es/translation-landing', 'translationLanding')->name('translation-landing');
    Route::get('/es/pricestable', 'pricestable')->name('pricestable');
    Route::get('/es/welcome', 'welcome')->name('welcome');
});

Route::controller(QuoteController::class)->group(function () {
    Route::post('/upload-file', 'UploadRequestFile')->name('uploadfile');
    Route::post('/save-request', 'SaveRequest')->name('saverequest');
    Route::post('/save-payment-info', 'SavePaymentInfo')->name('savepaymentinfo');
    Route::get('/test', 'EmailTest')->name('test');
});