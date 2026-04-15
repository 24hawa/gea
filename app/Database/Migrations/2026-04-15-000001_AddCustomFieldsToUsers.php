<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCustomFieldsToUsers extends Migration
{
public function up()
{    
    $this->db->query("SET search_path TO public");

    // Only try to add columns if the users table actually exists!
    // if ($this->db->tableExists('users')) 
    // {
        $fields = [
            'google_id' => [
                'type'       => 'VARCHAR', 
                'constraint' => 255, 
                'null'       => true,
                'after'      => 'username' 
            ],
            'user_type' => [
                'type'       => 'VARCHAR', 
                'constraint' => 50, 
                'default'    => 'participant',
                'after'      => 'google_id'
            ],
        ];

        $this->forge->addColumn('users', $fields);
//     } 
//     else 
//     {
//         // This will print to your terminal so you know why it skipped
//         echo "Skipping AddCustomFields: 'users' table not found yet.";
//     }
}
    public function down()
    {
        $this->db->query("SET search_path TO public");
        $this->forge->dropColumn('users', ['google_id', 'user_type']);
    }
}