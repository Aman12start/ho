<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends BaseController {

    public function __construct() {
        helper(['url', 'form']);
        $this->session = session();
    }

    public function contact() {
        return view('frontend/pages/contact');
    }

    public function contactusdata() {
        $validation = \Config\Services::validation();

        $rules = [
            'name' => [
                'label' => 'Name',
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'The {field} is required.',
                    'min_length' => 'The {field} must be at least {param} characters.',
                    'max_length' => 'The {field} cannot exceed {param} characters.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|max_length[100]',
                'errors' => [
                    'required' => 'The {field} is required.',
                    'valid_email' => 'Please enter a valid {field}.',
                    'max_length' => 'The {field} cannot exceed {param} characters.'
                ]
            ],
            'mobile_number' => [
                'label' => 'Mobile Number',
                'rules' => 'required|min_length[10]|max_length[15]',
                'errors' => [
                    'required' => 'The {field} is required.',
                    'min_length' => 'The {field} must be at least {param} digits.',
                    'max_length' => 'The {field} cannot exceed {param} digits.'
                ]
            ],
            'subject' => [
                'label' => 'Subject',
                'rules' => 'required|min_length[5]|max_length[100]',
                'errors' => [
                    'required' => 'The {field} is required.',
                    'min_length' => 'The {field} must be at least {param} characters.',
                    'max_length' => 'The {field} cannot exceed {param} characters.'
                ]
            ],
            'message' => [
                'label' => 'Message',
                'rules' => 'required|min_length[10]|max_length[500]',
                'errors' => [
                    'required' => 'The {field} is required.',
                    'min_length' => 'The {field} must be at least {param} characters.',
                    'max_length' => 'The {field} cannot exceed {param} characters.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return view('frontend/pages/contact', [
                'validation' => $this->validator
            ]);
        }

        // If validation passes, process the form (e.g., save to the database or send an email)
        $this->session->setFlashdata('success', 'Your message has been sent successfully.');
        return redirect()->to(base_url('contact'));
    }
}
