<?php

namespace App\Http\Controllers\panel;

use App\Events\NewMessage;
use App\Events\OnlineUser;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Requst;
use App\Models\step;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use function Termwind\render;

class panelController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {

        if (Gate::denies('admin')){
            $step=[];
            $checkStep=[];
            foreach (step::all() as $ste) {
                if (Auth::user()['request_status']!=null){
                    foreach (json_decode(Auth::user()['request_status']) as $che) {
                        if ($ste['step_id']==$che){
                            array_push($checkStep,$ste);
                        }else{
                            array_push($step,$ste);

                        }
                    }

                }else{
                    array_push($step,$ste);

                }
            }
            return Inertia::render('dashboard',['step'=>$step,'checkStep'=>$checkStep,'user'=>Auth::user()]);

            $check=json_decode(Requst::query()->where('user_id',Auth::id())->first(['check'])?Requst::query()->where('user_id',Auth::id())->first(['check'])['check']:'[]');

            return view('panel.pages.dashboard',['user'=>Auth::user(),'country'=>Country::all(),'check'=>$check,'steps'=>step::all()]);
        }else{
            return view('panel.pages.index',['user'=>Auth::user(),'country'=>Country::all()]);

        }
    }


    public function chat()
    {
        return Inertia::render('chat',['user_id'=>Auth::id(),'info'=>User::query()->whereNot('id',Auth::id())->get(),'user'=>Auth::user()]);

    }

    public function request()
    {

        return view('panel.pages.request',['requests'=>Requst::all(),'steps'=>step::all()]);
    }

    public function user()
    {
        return view('panel.pages.user',['users'=>User::query()->whereNot('id',Auth::id())->get()]);
    }

    public function showUser($id)
    {
        $userRequest=User::find($id);
        $step=step::query()->where('id_step','>',$userRequest['status_request'])->get();
        if ($userRequest['pending']==1){
            $step=step::query()->where('id_step','>=',$userRequest['status_request'])->get();

        }
        return Inertia::render('show',['step'=>$step,'user'=>$userRequest]);
    }
    public function storeUser()
    {

        $validation=Validator::make(\request()->all(),[
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rule' => ['required']
        ]);

        if ($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }


        User::create([
            'name'=>\request('username'),
            'email'=>\request('email'),
            'password'=>Hash::make(\request('password')),
            'rule'=>\request('rule')
        ]);
        return redirect()->back()->with('status',200);
    }

    public function profile()
    {
        $user=Auth::user();
        $step=step::query()->where('id_step','>',$user['status_request'])->get();
        return Inertia::render('profile.vue',['step'=>$step,'user'=>$user]);
    }

}
