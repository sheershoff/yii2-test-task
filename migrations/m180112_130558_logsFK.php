<?php

use yii\db\Migration;

/**
 * Class m180112_130558_logsFK
 */
class m180112_130558_logsFK extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addForeignKey('logs_user', '{{%divide}}', 'user_id', '{{%user}}', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('logs_user', '{{%divide}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180112_130558_logsFK cannot be reverted.\n";

        return false;
    }
    */
}
