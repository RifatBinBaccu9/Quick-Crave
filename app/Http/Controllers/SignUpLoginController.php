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
        'email'=>'required|email:rfc,dns',
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
    
    // login section
    public function login(){
            return view('main-site.pages.login');
    }
    public function loginCheck(Request $req){
            $req->validate([
            'email'=>'required|email:rfc,dns',
            'password'=> 'required',
          ]);
        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
            if(Auth::user()->is_type == 'admin'){
                return redirect()->route('admin');
            }else{
                return redirect()->route('home');
            }
        }else{
            dd('not');
        }
    }

    // logout section
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    // User Profile section
    public function UserProfile(){
        return view('user-site.pages.userProfile');
    }
}
