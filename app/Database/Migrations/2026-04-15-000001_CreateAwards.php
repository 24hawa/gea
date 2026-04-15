<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAwards extends Migration
{
    public function up()
    {
        // Set the schema
        $this->db->query("SET search_path TO public");

        $this->forge->addField([
            'id' => [
                'type'           => 'SERIAL', // This handles auto-increment in Postgres
            ],
            'a_name' => [
                'type'           => 'VARCHAR', 
                'constraint'     => '255',
            ],
            'template' => [
                'type'           => 'VARCHAR', 
                'constraint'     => '255', 
                'null'           => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('awards');
    }

    public function down()
    {
        $this->db->query("SET search_path TO public");
        $this->forge->dropTable('awards', true); // 'true' adds IF EXISTS safety
    }
}