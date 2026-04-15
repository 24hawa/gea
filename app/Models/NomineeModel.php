<?php

namespace App\Models;

use CodeIgniter\Model;

class NomineeModel extends Model
{
    protected $table            = 'nominees';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = ''; // We don't have an updated_at column

    protected $allowedFields    = [
        'user_id', 'salutation', 'f_name', 'm_name', 'l_name', 'gender', 
        'affiliation', 'nationality', 'c_code', 'contact', 'nemail', 'status',
        'c_email', 'address', 'award', 'summary', 'contribution', 
        'outcome', 'innovation', 'potential', 'template_upload', 
        'yt_link', 'references_json'
    ];
}