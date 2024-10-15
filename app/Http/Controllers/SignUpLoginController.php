<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpLoginController extends Controller
{
    // signup section
    public function signup(){
        return view('main-site.pages.signup');
    }
    public function signupPush(Request $req){
        $signupData=[
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password,
        ];
        User::create($signupData);
        dd($signupData);
    }
}
