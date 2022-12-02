<?php

namespace App\Http\Controllers;

use App\Http\Requests\mail;
use App\Mail\contact;
use App\Mail\contactClint;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function __construct()
    {
//        App::setLocale('fa');
//        session(['lang'=>'fa']);
////        if (session('lang')){
//            dd(session()->all());
//            App::setLocale(session('lang'));
////        }
    }

    public function index()
    {
        if (session()->has('lang')){
            App::setLocale('fa');
        }
        return view('web.pages.home');
    }

    public function about()
    {
        return view('web.pages.about');
    }

    public function content()
    {
        return view('web.pages.content');

    }

    public function service($service)
    {
        if (!service::query()->where('link_page','/service/'.$service)->first()){
            abort(404);
        }
        return view('web.pages.'.$service);
    }

    public function student()
    {
        return view('web.pages.student');
    }

    public function parent()
    {
        return view('web.pages.parent');
    }

    public function successfully()
    {
        return view('web.pages.successfully');
    }

    public function fa()
    {
        App::setLocale('fa');
        session(['lang'=>'fa']);
//        dd(session()->all());

        return redirect()->back();
    }
    public function en()
    {
        App::setLocale('en');
//        session()->flash();
        session()->forget('lang');

//        dd(session()->all());

        return redirect()->back();
    }

    public function email(mail $request)
    {
        \Illuminate\Support\Facades\Mail::to('Admin@gmail.com')->send(new contact($request->name,$request->msg_subject,$request->email,$request->message,$request->phone_number));
        \Illuminate\Support\Facades\Mail::to($request->email)->send(new contactClint($request->name));
       return redirect()->back();
    }

    public function search(Request $request)
    {
        $validation=Validator::make($request->all(),[
            'input-search'=>'required'
        ]);
        if ($validation->fails()){
            redirect()->back();
        }
        return view('web.pages.search',['search'=>\request('input-search')]);
    }
}
