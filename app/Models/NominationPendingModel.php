<?php

namespace App\Models;

use CodeIgniter\Model;

class NominationPendingModel extends Model
{
protected $table = 'nominations_pending';
    protected $allowedFields = ['nominator_name', 'email2', 'nominee_name', 'nominee_email', 'invitation_token', 'status', 'created_at'];
}
