<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id', 'user_email', 'user_password', 'user_type','user_status'];


    // Get all users
    public function getAllUser()
    {
        return $this->select()
            ->where('user_type', 'user')
            ->get()
            ->getResult();
    }

    // Get details of the user
    public function getUserDetails($id)
    {
        return $this->where(['user_id' => $id])
            ->get()->getRowArray();
    }
}
