<?php

namespace App\Models;

use CodeIgniter\Model;

class RequirementsModel extends Model
{
    protected $table = 'requirements';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_id',
        'regForm',
        'grades',
        'signatures',
        'profile',
    ];


    
    // Get User Requirement
     public function getRequirementsDetails($id)
    {
        return $this->where(['user_id' => $id])
            ->get()->getRowArray();
    }


    // Check if the user requirement is null
    public function isNull($id){

        return is_null($this->where(['user_id' => $id])
            ->get()->getRowArray());
    }
}
