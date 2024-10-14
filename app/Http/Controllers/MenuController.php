<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu() {
        return view('main-site.pages.menu');
    }
}
