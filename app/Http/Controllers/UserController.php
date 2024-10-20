<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
    // user section 
    public function user(){
        $users=Auth::user();
        return view('user-site.pages.dashboard',[
            'users'=>$users,
        ]);
    }

    // Userbooking section
    public function Userbooking(){
        return view('user-site.pages.bookingList');
    }

    public function UserProfile(){
        $users=Auth::user();
        return view('user-site.pages.userProfile',[
            'users'=>$users,
        ]);
    }
}
