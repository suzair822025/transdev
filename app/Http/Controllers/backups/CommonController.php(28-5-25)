<?php

namespace App\Http\Controllers;

use App\Languages;
use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;


class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function languageSession($lang)
    {
        $lang = $lang;
    
    if (in_array($lang, ['en', 'es'])) {
        Session::put('lang', $lang);
    }
    $url = $lang == "en" ? url('/') : url('/es');
    return redirect($url);

    }

    public function services()
    {
        return view('services');
    }
    public function avtranscription()
    {
        return view('avtranscription');
    }
    public function avtranslation()
    {
        return view('avtranslation');
    }
    public function doctranslation()
    {
        return view('doctranslation');
    }
    public function subtitling()
    {
        return view('subtitling');
    }
    public function prfcopyedit()
    {
        return view('prfcopyedit');
    }
    public function prftransaicontent()
    {
        return view('prftransaicontent');
    }
    public function indspecservices()
    {
        return view('indspecservices');
    }    
    public function howItWorks()
    {
        return view('howItWorks');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function contact()
    {
        return view('contact');
    }

    public function subscribe()
    {
        return view('subscribe');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function careers()
    {
        return view('careers');
    }

    public function order()
    {
        $mode1 = DB::table('packages')->where('mode_id',1)->first();
        $languages = Languages::get();
        return view('order',compact('mode1', 'languages'));
    }

    public function getQuote()
    {
        $languages = [];//Languages::get();
        return view('get-quote', compact('languages'));
    }
    public function translationLanding()
    {
        $languages = Languages::get();
        return view('translation-landing', compact('languages'));
    }

    public function pricestable()
    {
        return view('prices-table');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
