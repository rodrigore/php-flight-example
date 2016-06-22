<?php

use Phinx\Migration\AbstractMigration;

class CreateScoresTable extends AbstractMigration
{
	public function up()
	{
		$table = $this->table('scores');
		$table->addColumn('username', 'string')
			->addColumn('score', 'integer')
			->create();
	}

	public function down()
	{
		$this->dropTable('scores');
	}

}
