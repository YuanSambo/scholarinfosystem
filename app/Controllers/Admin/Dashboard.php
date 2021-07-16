<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CustomModel;
use App\Models\UserModel;
use App\Models\RequirementsModel;




class Dashboard extends BaseController
{

    public function index(){
        $data['title'] = "Admin";
        $data['css'] = "/css/admin.css";
        session()->set($data);

        return view('admin/dashboard');
    }


    public function getUsers(){
        $db = db_connect();
        $custom = new CustomModel($db);

        $data = $custom->getAllData();
        echo json_encode($data);

    }

    public function profile($id){

        $requirementsModel = new RequirementsModel();


        $db = db_connect();
        $custom = new CustomModel($db);

      
        $data = $custom -> getUser($id);
        $data["noReq"] = $requirementsModel->isNull($id);

        if (!$data["noReq"]) {
           $data = array_merge($data,$requirementsModel->getRequirementsDetails($id));
        }
    
        return view('admin/profile',$data);
    }

    public function acceptStatus($id){

        $userModel = new userModel();
        $data = [
            'user_status' => 'Accepted',
        ];
     
        $userModel->update($id,$data);

        return redirect()->back();
    }



    public function delete($id){
        $userModel = new UserModel();
        $userModel->delete($id);
        return view("admin/dashboard");

        
    }

    
}

    