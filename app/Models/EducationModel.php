<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_id',
        'elem_school',
        'second_school',
        'senior_school',
        'elem_address', 
        'second_address',
        'senior_address',
        'elem_year',
        'second_year',
        'senior_year'
    ];

    // Get the education background of the user
    public function getEducationDetails($id)
    {
        return $this->where(['user_id' => $id])
            ->get()->getRowArray();
    }
}
