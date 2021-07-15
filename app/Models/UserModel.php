<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id', 'user_email', 'user_password', 'user_type',];


    public function getAllUser()
    {
        return $this->select()
            ->where('user_type', 'user')
            ->get()
            ->getResult();
    }

    public function getUserDetails($id)
    {
        return $this->where(['user_id' => $id])
            ->get()->getRowArray();
    }
}
