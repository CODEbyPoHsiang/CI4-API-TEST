<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=> [
				'type'           	=> 'BIGINT',
				'constraint'     	=> 20,
				'unsigned'       	=> TRUE,
				'auto_increment' 	=> TRUE
			],
			'ename'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'phone'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'email'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'sex'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'name'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'city'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'township'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'postcode'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'address'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'notes'       	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('member');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
