<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpLoginController extends Controller
{
    // signup section
    public function signup(){
        return view('main-site.pages.signup');
    }
    public function signupPush(Request $req){
       $req->validate([
        'name'=> 'required',
        'email' => 'required|email|unique:users,email',
        'password'=> 'required',
        'password_confirmation'=> 'required|same:password',
       ]);

        $signupData=[
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
        ];
        User::create($signupData);
        return redirect()->route('login');
    }
    
    public function login(){
            return view('main-site.pages.login');
    }
    public function loginCheck(Request $req){
        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
            dd('ok');
        }else{
            dd('not');
        }
    }
}
