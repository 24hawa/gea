<?php

namespace App\Models;

use CodeIgniter\Model;

class AwardModel extends Model
{
    protected $table            = 'awards';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['a_name', 'template'];

    // Dates
    protected $useTimestamps = false; // We didn't add timestamps to the awards table
}
