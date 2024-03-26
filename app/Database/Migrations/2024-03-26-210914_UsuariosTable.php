<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosTable extends Migration
{
    public function up()
    {
        //colums
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true
            ],
            'cretated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        // primary Key
        $this->forge->addPrimaryKey('id');

        // create table
        $this->forge->createTable('usuarios');
    }
    public function down()
    {
        //delete table
        $this->forge->droptable('usuarios');
    }
}
