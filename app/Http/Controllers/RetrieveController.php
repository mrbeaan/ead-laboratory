<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetrieveController extends Controller
{
    //praktikum
    public function praktikum(){
      $praktikum = DB::select('select * from praktikum');
      return view('welcome',compact('praktikum'));
    }

    public function asisten(){
      $asisten = DB::select('select * from asisten');
      return view('about-us.assistant',compact('asisten'));
    }

    public function produk(){
      $produk = DB::select('select * from produk');
      return view('product.product',compact('produk'));
    }

    public function template(){
      $template = DB::select('select * from template');
      return view('product.template',compact('template'));
    }

    public function gallery(){
      $gallery = DB::select('select * from gallery');
      return view('gallery.gallery',compact('gallery'));
    }

    public function gallery_priority_2018(){
      $priority_2018 = DB::select('select * from gallery_priority_2018');
      return view('gallery.priority-2018',compact('priority_2018'));
    }

    public function event(){
      $event = DB::select('select * from event');
      return view('event.event',compact('event'));
    }
}
