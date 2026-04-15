<?php

namespace App\Models;

use CodeIgniter\Model;

class NominatorModel extends Model
{
    protected $table            = 'nominators';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = '';

    protected $allowedFields    = [
        // Nominator Fields
        'salutation2', 'f_name2', 'm_name2', 'l_name2', 'affiliation2', 
        'nationality2', 'c_code2', 'contact2', 'n_email2',
        // Nominee Preview Fields
        'n_salutation', 'n_fname', 'n_mname', 'n_lname', 
        'n_affiliation', 'n_email', 
        // Logic Fields
        'invitation_token', 'status'
    ];
}