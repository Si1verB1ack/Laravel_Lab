<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("allpages.home");
    }

    public function aboutpage(){
        return view("allpages.about");
    }

    public function contactuspage(){
        return view("allpages.contactus");
    }
}
