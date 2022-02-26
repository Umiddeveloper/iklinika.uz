<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\helpers\SearchHelper;
use common\models\Feedback;
use common\models\Telegram;
use frontend\models\ApplicationForm;
use frontend\models\ContactForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', [
            'photoIndex' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'photo'])->id])->all(),
            'Reviews' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'reviews'])->id])->limit(2)->all(),
            'InfoReviews' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'info'])->id])->limit(1)->all(),
            'freeServices' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'freeservices'])->id])->limit(4)->all(),
            'paindServices' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'paindservices'])->id])->limit(6)->all(),
            'centerHelp' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'center'])->id])->limit(1)->all(),
            'applicationSerach' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'application'])->id])->limit(1)->all(),
            'photos' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'photo-gallery'])->id])->limit(9)->all(),
            'migrationInfo' => Options::find()->where(['collection_id' => Collections::findOne(['slug' => 'migrationone'])->id])->andWhere(['!=', 'depth', 0])->limit(2)->all(),
            'newWrapper' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->limit(3)->all(),
        ]);
    }

    public function actionContacts()
    {
        $contactForm = new ContactForm();
        if (Yii::$app->request->post()) {
            if ($contactForm->load(Yii::$app->request->post()) && $contactForm->validate()) {
                $contactForm->save();
                Yii::$app->session->setFlash('success', Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.'));
                return $this->refresh();
            } else {
                dd($contactForm->errors);
            }
        }

        return $this->render('contacts', [
            'contactForm' => $contactForm,]);

    }

    public function actionSitemap()
    {
        return $this->render('sitemap',[
            'bannerProblem' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'problem'])->id])->all(),
            'freeServices' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'freeservices'])->id])->all(),
            'Reviews' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'reviews'])->id])->limit(100)->all(),
            'InfoReviews' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'info'])->id])->limit(1)->all(),
            'migrationInfo' => Options::find()->where(['collection_id' => Collections::findOne(['slug' => 'migrationone'])->id])->andWhere(['!=', 'depth', 0])->limit(2)->all(),
            'newWrapper' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->limit(20)->all(),
            'centerHelp' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'center'])->id])->limit(1)->all(),
            ]);
    }

    public function actionAbout()
    {
        return $this->render('about', [
            'aboutCollegion' => Items::find()->where
            (['entity_id' => Entities::findOne(['slug' => 'specialist'])->id])
                ->all(),
        ]);
    }

    public function actionProblem()
    {
        return $this->render('problem', [
            'bannerProblem' => Items::find()->where
            (['entity_id' => Entities::findOne(['slug' => 'problem'])->id])
                ->all(),
        ]);
    }

    public function actionSearch($q = '')
    {
        $langId = Yii::$app->params['l'][Yii::$app->language];
        $dataProvider = new ActiveDataProvider([
            'query' => Items::find()
                ->andFilterWhere(['or',
                    ['entity_id' => Entities::findOne(['slug' => 'freeservices'])->id],
                    ['entity_id' => Entities::findOne(['slug' => 'reviews'])->id],
                    ['entity_id' => Entities::findOne(['slug' => 'paindservices'])->id],
                ])
                ->andFilterWhere(['or',
                    ['like', 'text_1_' . $langId, $q],
                    ['like', 'text_2_' . $langId, $q],
                    ['like', 'text_3_' . $langId, $q],
                    ['like', 'text_4_' . $langId, $q],
                    ['like', 'text_5_' . $langId, $q],
                    ['like', 'text_6_' . $langId, $q],
                    ['like', 'text_7_' . $langId, $q],
                ]),
            'pagination' => [
                'pageSize' => 6,
            ]
        ]);
        return $this->render('search', [
            'dataProvider' => $dataProvider,
            'search' => $q,
            $paindServices = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'paindservices'])->id])->all(),
            'title' => Yii::t('app', 'Search'),
            'painServices' => $paindServices
        ]);

    }

}
