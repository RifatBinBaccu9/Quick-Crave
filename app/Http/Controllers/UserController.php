<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    // user section 
    public function user(){
        return view('user-site.pages.dashboard');
    }

    // Userbooking section
    public function Userbooking(){
        return view('user-site.pages.bookingList');
    }
}
