<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNominees extends Migration
{
    public function up()
    {
      $this->db->query("SET search_path TO public");

        $this->forge->addField([
            'id'              => ['type' => 'SERIAL'], // Removed unsigned
            'user_id'         => ['type' => 'INT', 'null' => true], // Link to User Table
            'salutation'      => ['type' => 'VARCHAR', 'constraint' => '20'],
            'f_name'          => ['type' => 'VARCHAR', 'constraint' => '100'],
            'm_name'          => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'l_name'          => ['type' => 'VARCHAR', 'constraint' => '100'],
            'gender'          => ['type' => 'VARCHAR', 'constraint' => '20'],
            'affiliation'     => ['type' => 'VARCHAR', 'constraint' => '255'],
            'nationality'     => ['type' => 'VARCHAR', 'constraint' => '100'],
            'c_code'          => ['type' => 'VARCHAR', 'constraint' => '10'],
            'contact'         => ['type' => 'VARCHAR', 'constraint' => '20'],
            'nemail'          => ['type' => 'VARCHAR', 'constraint' => '150'],
            'c_email'         => ['type' => 'VARCHAR', 'constraint' => '150'],
            'address'         => ['type' => 'TEXT'],
            'award'           => ['type' => 'VARCHAR', 'constraint' => '255'],
            'summary'         => ['type' => 'TEXT'],
            'contribution'    => ['type' => 'TEXT'],
            'outcome'         => ['type' => 'TEXT'],
            'innovation'      => ['type' => 'TEXT'],
            'potential'       => ['type' => 'TEXT'],
            'template_upload' => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'yt_link'         => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'references_json' => ['type' => 'TEXT', 'null' => true], 
            'status'          => ['type' => 'VARCHAR', 'constraint' => '50', 'default' => 'draft'],
            'created_at'      => ['type' => 'TIMESTAMP', 'null' => true, 'default' => new \CodeIgniter\Database\RawSql('CURRENT_TIMESTAMP')],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('nominees');
    }

    public function down()
    {
        $this->db->query("SET search_path TO public");
        $this->forge->dropTable('nominees', true);
    }
}