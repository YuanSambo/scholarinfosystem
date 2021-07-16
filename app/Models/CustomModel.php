<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel
{
    protected $db;

    public function __construct(Connectioninterface &$db)
    {
        $this->db = &$db;
    }


    public function getAllUsers()
    {
        return $this->db->table('users')->where('user_type', 'user')->get()->getResult();
    }

    public function getUser($id)
    {
        return $this->db->table('users')
        ->where('users.user_id', $id)
        ->join('personal', 'users.user_id = personal.user_id', 'left')
        ->join('education', 'users.user_id = education.user_id', 'left')
        ->get()
        ->getRowArray();

    }

    public function join()
    {
        return $this->db->table('users')->where('user_type', 'user')
        ->join('personal', 'users.user_id = personal.user_id')
            ->get()
            ->getResult();
    }

    public function getAllData()
    {
        return $this->db->table('users')
            ->where('user_type', 'user')
            ->join('personal', 'users.user_id = personal.user_id','left')
            ->join('education', 'users.user_id = education.user_id', 'left')
            ->get()
            ->getResult();
    }
}
