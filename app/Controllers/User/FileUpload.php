<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\RequirementsModel;

class FileUpload extends BaseController
{
    

    public function index()
    {
        
        $requirementsModel = new RequirementsModel();

        // Validation Rules
        $rules = [
            'regForm' => [
                'label' => 'Registration Form',
                'rules' => 'uploaded[regForm]|ext_in[regForm,png]',
            ],
            'grades' => [
                'label' => 'Grades',
                'rules' => 'uploaded[grades]|ext_in[grades,png]',
            ],
            'signatures' => [
                'label' => 'Signatures',
                'rules' => 'uploaded[signatures]|ext_in[signatures,png]',
            ],
            'profile' => [
                'label' => 'Profile Picture',
                'rules' => 'uploaded[profile]|ext_in[profile,png]',
            ],

        ];

        // Validation of the user input
        if ($this->validate($rules)) {

            $user_id = session()->user_id;
            $name = session()->name;

            $regForm = $this->request->getFile("regForm");
            $grades =  $this->request->getFile("grades");
            $signatures =   $this->request->getFile("signatures");
            $profile =   $this->request->getFile("profile");


            if ($regForm->isValid() && !$regForm->hasMoved()) {
                $regForm->move('./uploads/' . $name, 'regForm.' . $regForm->getExtension(), true);
            }

            if ($grades->isValid() && !$grades->hasMoved()) {
                $grades->move('./uploads/' . $name, 'grades.' . $grades->getExtension(), true);
            }

            if ($signatures->isValid() && !$signatures->hasMoved()) {
                $signatures->move('./uploads/' . $name, 'signatures.' . $signatures->getExtension(), true);
            }
            if ($profile->isValid() && !$profile->hasMoved()) {
                $profile->move('./uploads/' . $name, 'profile.' . $profile->getExtension(), true);
            }

            $requirementsData = [
                'user_id' => $user_id,
                'regForm' => 'uploads/' . $name . '/regForm.png',
                'grades' => 'uploads/' . $name . '/grades.png',
                'signatures' => 'uploads/' . $name . '/signatures.png',
                'profile' => 'uploads/' . $name . '/profile.png',
            ];

            if (session()->noReq) {
                $requirementsModel->insert($requirementsData);
            } else {
                $requirementsModel->update($user_id, $requirementsData);
            }

            return redirect()->back();
        }

        $data['validation'] = $this->validator;
        return view('/user/profile',$data);
    }
}
