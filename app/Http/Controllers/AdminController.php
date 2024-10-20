<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $users=Auth::user();
        return view('admin-site.pages.dashboard',[
            'users'=>$users,
        ]);
    }

    // admin profile section
    public function adminProfile(){
        $users=Auth::user();
        return view('admin-site.pages.profile',[
            'users'=>$users,
        ]);
    }
}
