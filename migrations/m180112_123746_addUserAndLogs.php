<?php

use app\migrations\Migration;

/**
 * Class m180112_123746_addUserAndLogs
 */
class m180112_123746_addUserAndLogs extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL',
            'password' => 'VARCHAR(255) NOT NULL',
        ]);
        $this->batchInsert('{{%user}}', ['id', 'name', 'password'], [
            ['id' => 1, 'name' => 'testtask', 'password' => 'tasktest'],
            ['id' => 2, 'name' => 'testtask2', 'password' => 'tasktest2'],
        ]);
        $this->createTable('{{%divide}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'ts' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'n' => $this->integer(),
            'a' => 'TEXT NOT NULL',
            'r' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180112_123746_addUserAndLogs cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180112_123746_addUserAndLogs cannot be reverted.\n";

        return false;
    }
    */
}
