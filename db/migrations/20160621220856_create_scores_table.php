<?php

use Phinx\Migration\AbstractMigration;

class CreateScoresTable extends AbstractMigration
{
	public function up()
	{
		$table = $this->table('scores');
		$table->addColumn('username', 'string')
			->addColumn('score', 'integer')
            ->addColumn('created_at', 'timestamp')
            ->addColumn('updated_at', 'timestamp')
			->create();
	}

	public function down()
	{
		$this->dropTable('scores');
	}

}
