<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // echo "hello "; die;
        return view('frontend/pages/index');
        print_r("welcome");

    }
  
    // public function aboute()
    // {
    //     // echo "hello "; die;
    //     return view('frontend/pages/about');
    //     // print_r("welcome");

    // }
    // public function dek()
    // {
    //     // echo "hello "; die;
    //     return view('frontend/pages/desk');
    //     // print_r("welcome");

    // }
    // public function evnt()
    // {
    //     // echo "hello "; die;
    //     return view('frontend/pages/events');
    //     // print_r("welcome");

    // }
    // public function contct()
    // {
    //     // echo "hello "; die;
    //     return view('frontend/pages/contact');
    //     // print_r("welcome");

    // }
    // public function prvcy()
    // {
    //     // echo "hello "; die;
    //     return view('frontend/pages/privacy');
    //     // print_r("welcome");

    // }
    // public function disclmr()
    // {
    //     // echo "hello "; die;
    //     return view('frontend/pages/disclaimer');
    //     // print_r("welcome");

    // }


}
