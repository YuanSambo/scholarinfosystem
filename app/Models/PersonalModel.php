<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table = 'personal';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'name_suffix',
        'birth_date',
        'birth_place',
        'sex',
        'contact_number',
        'province',
        'municipality',
        'barangay',
        'full_address',

    ];


    // Get the personal details of the user
    public function getPersonalDetails($id)
    {
        return $this->where(['user_id' => $id])
            ->get()->getRowArray();
    }
}
