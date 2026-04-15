<?php

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

class UserModel extends ShieldUserModel
{
    protected $table          = 'users';
    protected $primaryKey     = 'id';
    protected $returnType     = \CodeIgniter\Shield\Entities\User::class; // Best to use the Entity
    
    protected array $authIdentifiers = ['email'];

    protected $allowedFields = [
        'email', 
        'status', 
        'active', 
        'first_name', 
        'last_name', 
        'user_type', 
        // 'password' HAS BEEN REMOVED FROM HERE
        'avatar'
    ];
}