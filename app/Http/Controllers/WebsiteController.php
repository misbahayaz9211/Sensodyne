<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function user_details(){
        return view('UI.user_details');
    }
    public function screen(){
        return view('UI.screen');
    }
    public function proceed(){
        return view('UI.proceed');
    }
   

}
