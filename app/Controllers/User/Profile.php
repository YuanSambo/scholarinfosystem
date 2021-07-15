<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PersonalModel;
use App\Models\EducationModel;
use App\Models\RequirementsModel;

class Profile extends BaseController
{
    public function index()
    {

        $user_id = session()->user_id;

        $educationModel = new EducationModel();
        $personalModel = new PersonalModel();
        $requirementsModel = new RequirementsModel();


        $data = array_merge(
            $personalModel->getPersonalDetails($user_id),
            $educationModel->getEducationDetails($user_id),
        );


        $data["full_name"] = $data['first_name'] . " " . $data['middle_name'][0] . ". " . $data["last_name"];
        $data["name"] = $data['first_name'] . $data["last_name"];
        $data["noReq"] = $requirementsModel->isNull($user_id);

        if (!$data["noReq"]) {
            session()->set($requirementsModel->getRequirementsDetails($user_id));
        }

        $data['title'] = "Profile";
        $data['css'] = "/css/profile.css";
        session()->set($data);

        return view('user/profile');
    }


  
}
