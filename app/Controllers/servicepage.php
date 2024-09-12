<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class servicepage extends BaseController
{
    public function servicepages($id)
    // {
    //     if ($id === null) {
    //         $id = 1; 
         
    //     }
{
        $data['id'] = $id;

        return view('frontend/pages/servicepage', $data);
    }
}


