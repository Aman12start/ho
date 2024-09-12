<?php

namespace App\Controllers;

class contact extends BaseController{

    public function __construct()
    {
        helper(['url','form']);
        $this->session = session();
    }
    public function contct()
    {
        // echo "hello and"; die;
        return view('frontend/pages/contact');
        // print_r("welcome");

    }

    public function contactusdata()
    {
           $rules = [
    'contact-name' => [
        'label' => 'Name',
        'rules' => 'required|min_length[3]|max_length[50]', // Min length of 3, max length of 50
        'errors' => [
            'min_length' => 'The {field} must be at least {param} characters long.',
            'max_length' => 'The {field} cannot exceed {param} characters.'
        ]
    ],

    'contact-email' => [
        'label' => 'Email here',
        'rules' => 'required|valid_email|max_length[100]', // Ensure valid email and max length of 100
        'errors' => [
            'valid_email' => 'Please enter a valid email address.',
            'max_length' => 'The {field} cannot exceed {param} characters.'
        ]
    ],

    'contact-number' => [ // Note: Renamed from "Mobile Number" to avoid spaces
        'label' => 'Mobile Number',
        'rules' => 'required|min_length[10]|max_length[15]', // Min length of 10, max length of 15 (for phone numbers)
        'errors' => [
            'min_length' => 'The {field} must be at least {param} digits.',
            'max_length' => 'The {field} cannot exceed {param} digits.'
        ]
    ],

    'contact-subject' => [
        'label' => 'Subject',
        'rules' => 'required|min_length[5]|max_length[100]', // Subject with min length of 5 and max of 100
        'errors' => [
            'min_length' => 'The {field} must be at least {param} characters long.',
            'max_length' => 'The {field} cannot exceed {param} characters.'
        ]
    ],

    'contact-message' => [
        'label' => 'Message',
        'rules' => 'required|min_length[10]|max_length[500]', // Min length of 10, max length of 500
        'errors' => [
            'min_length' => 'The {field} must be at least {param} characters long.',
            'max_length' => 'The {field} cannot exceed {param} characters.'
        ]
    ]
];


        if($this->validate($rules))
        {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $mobileno = $this->request->getPost('mobileno');
            $subject = $this->request->getPost('subject');
            $message = $this->request->getPost('message');


        }
        else{
            $errors = $this->validator->getErrors();
            $errorMessage = implode('\n',$errors);
            $this->session->setFlashdata('errorMessage', $errorMessage);
            return redirect()->back();
        }

    }

}
