<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;

class Application extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return "{{%application}}";
    }

    public function rules()
    {
        return [
            [['status'], 'default', 'value' => false]
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'created_at' => 'Время',
        ];
    }

}