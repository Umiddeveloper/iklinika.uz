<?php

use yii\db\Migration;

/**
 * Class m211219_121520_contacts
 */
class m211219_121520_contacts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'phone' => $this->string(255),
            'subject' => $this->string(255),
            'text' => $this->text(),
            'status' => $this->boolean(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
        return true;
    }
}
