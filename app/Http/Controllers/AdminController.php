<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin-site.pages.dashboard');
    }

    // admin profile section
    public function adminProfile(){
        $users=User::get();
        return view('admin-site.pages.profile', [
            'users'=>$users,
        ]);
    }
}
