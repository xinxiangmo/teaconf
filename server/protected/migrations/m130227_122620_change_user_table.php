<?php

class m130227_122620_change_user_table extends CDbMigration
{
	public function up()
	{
        $this->dropColumn('user', 'secret_key');
        $this->dropColumn('user', 'github');
        $this->dropColumn('user', 'twitter');
        $this->dropColumn('user', 'google');

        $this->addColumn('user', 'created_at', 'int(11)');
        $this->addColumn('user', 'updated_at', 'int(11)');
        $this->addColumn('user', 'last_posted_at', 'int(11)');
	}

	public function down()
	{
		echo "m130227_122620_change_user_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
