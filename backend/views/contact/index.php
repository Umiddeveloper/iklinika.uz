<?php

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;


/* @var $dataProvider */
/* @var $searchModel */
?>
<div class="contacts-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' =>  Yii::t('app', 'name'),
                'label'=>'Имя',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::decode(Html::decode($model->name));
                }
            ],

            [
                'attribute' =>  Yii::t('app', 'phone'),
                'label'=>'Телефон',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::decode(Html::decode($model->phone));
                }
            ],
            [
                'attribute' => Yii::t('app', 'text'),
                'label'=>'Текст',
                'format' => 'ntext',
                'value' => function ($model) {
                    return Html::decode(Html::decode($model->text));
                }
            ],

            'created_at:datetime',
        ],
    ]) ?>

</div>
