<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book() {
        return view('main-site.pages.book');
    }

    public function bookPush(Request $req){
        $bookData=[
          'name'=>$req->name,
          'phone'=>$req->phone,
          'email'=>$req->email,
          'persons'=>$req->persons,
          'date'=>$req->date,
        ];
       Booking::create($bookData);
       dd($bookData);
    }
}
