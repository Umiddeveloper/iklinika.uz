<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contacts;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $subject
 * @property string|null $text
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class ContactsSearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['status','id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'phone', 'subject','text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'subject' => 'Subject',
            'text' => 'Text',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function search($params)
    {
        $query = Contacts::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query->orderBy('created_at DESC'),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
//            'industry' => $this->industry,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}