<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\OaI;
use afzalroq\cms\entities\front\Options;
use frontend\models\ApplicationForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class CController extends Controller
{

    public function actionItem(string $e, int $i)
    {

        $applicationForm = new ApplicationForm();
        if ($applicationForm->load(Yii::$app->request->post()) && $applicationForm->validate()) {
            $applicationForm->save();
            Yii::$app->session->setFlash('success', Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.'));
            return $this->refresh();
        }

        if ($e === 'problem') {
            $item = Items::findOne($i);
            $bannerProblem = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'problem'])->id])->all();
            return $this->render('banner_item', [
                'item' => $item,
                'bannerProblem' => $bannerProblem
            ]);
        }
        if ($e === 'photo-gallery') {
            $item = Items::findOne($i);
            $entity = Entities::findOne(['slug' => $e]);
            return $this->render('gallery-list', [
                'item' => $item,
                'entity' => $entity,
            ]);
        }
        if ($e === 'news') {
            $item = Items::findOne($i);
            $bannerProblem = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'problem'])->id])->all();
            $newWrapper = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->all();
            return $this->render('news', [
                'item' => $item,
                'newWrapper' => $newWrapper,
                'bannerProblem' => $bannerProblem
            ]);
        }
        if ($e === 'application') {
            $item = Items::findOne($i);
            $bannerProblem = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'application'])->id])->all();
            return $this->render('application', [
                'item' => $item,
                'bannerProblem' => $bannerProblem
            ]);
        }
        if ($e === 'page') {
            $item = Items::findOne($i);
            $pageInner = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'page'])->id])->limit(2)->all();
            return $this->render('help', [
                'item' => $item,
                'pageInner' =>  $pageInner

            ]);
        }
        if ($e === 'policy') {
        $item = Items::findOne($i);
        $bannerProblem = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'problem'])->id])->all();
        return $this->render('policy', [
            'item' => $item,
            'bannerProblem' => $bannerProblem,

        ]);
    }
        if ($e === 'reviews') {
            $item = Items::findOne($i);
            $bannerProblem = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'problem'])->id])->all();
            return $this->render('reviews', [
                'item' => $item,
                'bannerProblem' => $bannerProblem

            ]);
        }
        if ($e === 'info') {
            $item = Items::findOne($i);
            $infoFile = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'file'])->id])->limit(20)->all();
            $bannerProblem = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'problem'])->id])->all();
            return $this->render('info', [
                'item' => $item,
                'bannerProblem' => $bannerProblem,
                'infoFile' => $infoFile

            ]);
        }

        if ($e === 'freeservices') {
            $item = Items::findOne($i);
            $freeServices = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'freeservices'])->id])->all();
            return $this->render('freeservice', [
                'item' => $item,
                'Services' => $freeServices
            ]);
        }
        if ($e === 'paindservices') {
            $item = Items::findOne($i);
            $paindServices = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'paindservices'])->id])->all();
            return $this->render('paindservices', [
                'item' => $item,
                'Services' => $paindServices,

            ]);
        }
        if ($e === 'center') {
            $item = Items::findOne($i);
            $freeServices = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'freeservices'])->id])->all();
            $paindServices = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'paindservices'])->id])->all();
            return $this->render('center', [
                'item' => $item,
                'Services' => $freeServices,
                'painServices' => $paindServices,

            ]);
        }

    }

    public function actionOption(string $c, string $o)
    {
        if ($c === 'migrationone') {
            $typeOption = Options::findOne(['slug' => $o]);
            $typeOptionIds = OaI::find()->select('item_id')->where(['option_id' => $typeOption->id])->column();
            return $this->render('migration', [
                'migrationInfo' => $typeOption,
                'listText' => Items::find()
                    ->where(['id' => $typeOptionIds])
                    ->andWhere(['!=', 'text_1' . "_" . \Yii::$app->params['l'][\Yii::$app->language], ""])
                    ->all()
            ]);
        }

    }


}