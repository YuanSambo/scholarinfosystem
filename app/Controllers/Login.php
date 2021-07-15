<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = "Login";
        $data['css'] = "/css/login.css";
        session()->set($data);
        return view('login');
    }


    public function login(){

    $session = session();
    $model = new UserModel();

    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $data = $model->where('user_email', $email)->first();

    if ($data) {

        $user_type = $data['user_type'];
        $pass = $data['user_password'];
        $verify_pass = password_verify($password, $pass);

        if ($verify_pass) {

            $this->setSessionData($data['user_id'], $data['user_email'],$data['user_type']);
            if ($user_type == 'admin') {
                return redirect()->to('/admin/dashboard');
            }

            return redirect()->to('/user/profile');
        } else {
            $session->setFlashdata('msg', 'Wrong Password');
            return redirect()->to('/login');
        }
    } else {
        $session->setFlashdata('msg', 'Email not Found');
        return redirect()->to('/login');
    }
}
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }


    public function setSessionData($user_id, $user_email,$user_type)
    {
        $session = session();
        $ses_data = [
            'user_id' => $user_id,
            'user_email' => $user_email,
            'user_type' => $user_type,
            'logged_in' => TRUE
        ];

        $session->set($ses_data);
    }
}
