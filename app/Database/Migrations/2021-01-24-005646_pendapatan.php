<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendapatan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
			'created_at'       => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'updated_at'       => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],

		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('pendapatan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pendapatan');
	}
}
