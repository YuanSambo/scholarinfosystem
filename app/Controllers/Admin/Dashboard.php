<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PersonalModel;
use App\Models\EducationModel;
use App\Models\RequirementsModel;



class Dashboard extends BaseController
{

    public function index(){
        $data['title'] = "Admin";
        $data['css'] = "/css/admin.css";
        session()->set($data);

        return view('admin/dashboard');
    }


    public function getPersonal(){
        $userModel = new UserModel();

        $data = $userModel->getAllUser();
        echo json_encode($data);

    }

    public function profile($id){

        $personalModel = new PersonalModel();
        $educationModel = new EducationModel();
        $requirementsModel = new RequirementsModel();


        $data = array_merge($personalModel->getPersonalDetails($id),$educationModel->getEducationDetails($id));
        $data["noReq"] = $requirementsModel->isNull($id);

        if (!$data["noReq"]) {
           $data = array_merge($data,$requirementsModel->getRequirementsDetails($id));
        }
    
        return view('admin/profile',$data);
    }

    public function acceptStatus($id){

        $personalModel = new PersonalModel();
        $data = [
            "status" => "Accepted",
        ];
     
        $personalModel->update($id,$data);

        return redirect()->back();
    }



    public function delete($id){
        $userModel = new UserModel();
        $userModel->delete($id);
        return view("admin/dashboard");

        
    }

    
}

    