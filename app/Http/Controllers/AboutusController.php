<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    //

    public function index(){
      return view('about-us.about-us');
    }

    public function assistant(){
      return view('about-us.assistant');
    }

    public function alumnus(){
      return view('about-us.alumnus');
    }
}
