<?php

use yii\db\Migration;

/**
 * Class m211220_095006_application
 */
class m211220_095006_application extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%application}}', [
            'id' => $this->primaryKey(),

            'name' => $this->string(255),
            'age' => $this->integer(),
            'gender' => $this->integer(),
            'contacts' => $this->string(255),
            'note' => $this->string(255),
            'reason' => $this->integer(),
            'grade' => $this->integer(),

            'problem' => $this->text(),
            'text1' => $this->text(),
            'text2' => $this->text(),

            'status' => $this->boolean(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%application}}');
        return true;
    }
}
