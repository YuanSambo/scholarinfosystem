<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PersonalModel;
use App\Models\EducationModel;


class Register extends BaseController
{
    public function index()
    {
        $data['title'] = "Register";
        $data['css'] = "/css/registration.css";
        session()->set($data);

        return view('register');
    }

    public function save()
    {

        $data['title'] = "Register";
        $data['css'] = "/css/registration.css";

        $userModel = new UserModel();
        $personalModel = new PersonalModel();
        $educationModel = new EducationModel();


        // Set of Rules for User table
        $rules =
            [
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
                'password' => 'required|min_length[6]|max_length[200]',
                'confpassword' => 'required|matches[password]',
                'first_name' => 'required|max_length[50]',
                

                'middle_name' => 'required|max_length[50]',
                'last_name' => 'required|max_length[50]',
                'birth_date' => 'required|valid_date',
                'birth_place' => 'required|max_length[50]',
                'sex' => 'required|max_length[50]',
                'contact_number' => 'required|max_length[50]',
                'province' => 'required|max_length[50]',
                'municipality' => 'required|max_length[50]',
                'barangay' => 'required|max_length[50]',
                'full_address' => 'required|max_length[50]',

                'elem_school' => 'required|max_length[50]',
                'second_school' => 'required|max_length[50]',
                'senior_school' => 'required|max_length[50]',
                'elem_address' => 'required|max_length[50]',
                'second_address' => 'required|max_length[50]',
                'senior_address' => 'required|max_length[50]',
                'elem_year' => 'required|max_length[50]|numeric',
                'second_year' => 'required|max_length[50]|numeric',
                'senior_year' => 'required|max_length[50]|numeric',
            ];


            // Validates all the user input
        if ($this->validate($rules)) {

            $userData = [
                'user_email' => $this->request->getPost('email'),
                'user_password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),

            ];

            $personalData = [
                'first_name' => $this->request->getVar('first_name'),
                'middle_name' => $this->request->getVar('middle_name'),
                'last_name' => $this->request->getVar('last_name'),
                'birth_date' => $this->request->getVar('birth_date'),
                'birth_place' => $this->request->getVar('birth_place'),
                'sex' => $this->request->getVar('sex'),
                'contact_number' => $this->request->getVar('contact_number'),
                'province' => $this->request->getVar('province'),
                'municipality' => $this->request->getVar('municipality'),
                'barangay' => $this->request->getVar('barangay'),
                'full_address' => $this->request->getVar('full_address')


            ];


            $educationData = [
                'elem_school' => $this->request->getVar('elem_school'),
                'second_school' => $this->request->getVar('second_school'),
                'senior_school' => $this->request->getVar('senior_school'),
                'elem_address' => $this->request->getVar('elem_address'),
                'second_address' => $this->request->getVar('second_address'),
                'senior_address' => $this->request->getVar('senior_address'),
                'elem_year' => $this->request->getVar('elem_year'),
                'second_year' => $this->request->getVar('second_year'),
                'senior_year' => $this->request->getVar('senior_year'),
            ];

            if ($userModel->save($userData)) {

                $personalData['user_id'] = $userModel->getInsertID();
                $educationData['user_id'] = $userModel->getInsertID();

                $personalModel->insert($personalData);
                $educationModel->insert($educationData);

                return redirect()->to(site_url('login'));

            };
            
        } else {
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }
}
