<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home()
     {
          return view('Frontend.home');
     }

     public function gallery()
     {
          $gallery = Gallery::all();
          return view('Frontend.gallery',compact('gallery'));
     }
     public function product()
     {
          
          return view('Frontend.product');
     }

     public function productOne()
     {
          
          return view('Frontend.product-one');
     }
     public function productTwo()
     {
          
          return view('Frontend.product-two');
     }
     public function productThree()
     {
          
          return view('Frontend.product-three');
     }
     public function productFour()
     {
          
          return view('Frontend.product-four');
     }
     public function about()
     {
          
          return view('Frontend.about');
     }
     public function contact()
     {
          
          return view('Frontend.contact');
     }
}