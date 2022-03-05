<?php

use yii\db\Migration;

/**
 * Class m220305_130956_first_migrate
 */
class m220305_130956_first_migrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(255),
            'username' => $this->string(255)->notNull(),
            'created_at' => $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);
        $this->addColumn('user', 'email', $this->string(512)->notNull());
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'user_id' => $this->integer()
        ]);
        $this->addForeignKey('FK_post_user', 'post', 'user_id', 'user', 'id');
        $this->insert('user', [
            'username' => 'Ahmad',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_post_user', 'post');
        $this->dropTable('post');
        $this->dropTable('user');
    }
}
