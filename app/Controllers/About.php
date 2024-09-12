<?php

namespace App\Controllers;

class About extends BaseController
{
    public function abot()
    {
       // echo "hello "; die;
        return view('frontend/pages/about');
      

    }
}