<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
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
			'menu'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
			'harga'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
			'foto'       => [
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
		$this->forge->createTable('menu');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
