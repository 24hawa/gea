<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNominators extends Migration
{
    public function up()
    {
$this->db->query("SET search_path TO public");
        $this->forge->addField([
            'id'              => ['type' => 'SERIAL'], // Removed unsigned
            // Nominator Info
            'salutation2'     => ['type' => 'VARCHAR', 'constraint' => '20'],
            'f_name2'         => ['type' => 'VARCHAR', 'constraint' => '100'],
            'm_name2'         => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'l_name2'         => ['type' => 'VARCHAR', 'constraint' => '100'],
            'affiliation2'    => ['type' => 'VARCHAR', 'constraint' => '255'],
            'nationality2'    => ['type' => 'VARCHAR', 'constraint' => '100'],
            'c_code2'         => ['type' => 'VARCHAR', 'constraint' => '10'],
            'contact2'        => ['type' => 'VARCHAR', 'constraint' => '20'],
            'n_email2'        => ['type' => 'VARCHAR', 'constraint' => '150'],
            
            // Brief Nominee Detail for the invite
            'n_salutation'    => ['type' => 'VARCHAR', 'constraint' => '20'],
            'n_fname'         => ['type' => 'VARCHAR', 'constraint' => '100'],
            'n_mname'         => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'n_lname'         => ['type' => 'VARCHAR', 'constraint' => '100'],
            'n_affiliation'   => ['type' => 'VARCHAR', 'constraint' => '255'],
            'n_email'         => ['type' => 'VARCHAR', 'constraint' => '150'],
            
            // Security Token for the invitation link
            'invitation_token'=> ['type' => 'VARCHAR', 'constraint' => '100'],
            'status'          => ['type' => 'VARCHAR', 'constraint' => '20', 'default' => 'pending'],
            'created_at'      => [
                'type'    => 'TIMESTAMP', 
                'null'    => true, 
                'default' => new \CodeIgniter\Database\RawSql('CURRENT_TIMESTAMP')
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('nominators');
    }

    public function down()
    {
        $this->db->query("SET search_path TO public");
        $this->forge->dropTable('nominators', true);
    }
}