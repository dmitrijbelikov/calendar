<?php

class m131206_084210_create_table_meetings extends CDbMigration
{
	public function up()
	{
        $this->createTable('{{meetings}}', array(
            'id' => 'pk',
            'title' => 'varchar(200) NOT NULL',
            'type' => 'int(11) NOT NULL DEFAULT 0',
            'place' => 'text DEFAULT NULL',
            'started_at' => 'int(11) NOT NULL',
            'finished_at' => 'int(11) NOT NULL',
        ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('{{meetings}}');
	}
}