<?php

class m140520_123934_yii_events extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_post', array(
			'id'=>'pk',
			'text'=>'text NOT NULL',
		));
		
		$this->createTable('tbl_comment', array(
			'id'=>'pk',
			'text'=>'text NOT NULL',
			'comment_id'=>'int(11) NOT NULL',
		));
		$this->addForeignKey('fk_comment_post', 'tbl_comment', 'comment_id', 
			'tbl_post', 'id', 'CASCADE', 'RESTRICT');
	}

	public function safeDown()
	{
	
	}
}