<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'name_user'       => [
					'type'       => 'VARCHAR',
					'constraint' => 100,
					'null' => true,
			],
			'username' => [
					'type' => 'VARCHAR',
					'constraint' => 255,
					'null' => true,
			],

			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false,
			],

			'level' => [
				'type' => 'INT',
				'constraint' => 1,
				'null' => false,
			]
	]);
	$this->forge->addKey('user_id', true);
	$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
