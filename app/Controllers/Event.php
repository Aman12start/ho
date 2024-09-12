<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function evnt()
    {
        // echo "hello "; die;
        return view('frontend/pages/events');
        // print_r("welcome");

    }
}