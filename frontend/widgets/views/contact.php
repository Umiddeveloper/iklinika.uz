<?php

/* @var $applicationForm \frontend\models\ApplicationForm */

use himiklab\yii2\recaptcha\ReCaptcha2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<section class="main-newsletter">
    <div class="container">
        <div class="row align-items-center">
            <h2 style="color: #fff;" class="h2-title"><?=Yii::t('app','Сўров қолдиринг')?></h2>
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="contact-form mt-5">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'name')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Исмингиз (тахаллусингиз)'), 'required' => true, 'autofocus' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'age')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Ёш'), 'required' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'gender')->dropDownList(\frontend\models\ApplicationForm::getGender(), ['prompt' => Yii::t('app', 'Жинс'), 'class' => 'form-input', 'style' => 'padding: 20px;', 'required' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'reason')->dropDownList(\frontend\models\ApplicationForm::getReason(), ['prompt' => Yii::t('app', 'Муаммо тоифаси'), 'class' => 'form-input', 'style' => 'padding: 20px;', 'required' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'problem')->textarea(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Қаршингизда турган муаммони қисқача тасвирлаб беринг...'), 'required' => true])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'text1')->textarea(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Сиз бу муаммо билан биринчи марта қачон тўқнашгансиз...'), 'required' => true])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'text2')->textarea(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Нега ҳозир ариза беришга қарор қилдингиз?'), 'required' => true])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'note')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Шарҳлар'), 'required' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'contacts')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Алоқа учун контактлар (телефон рақами)'), 'required' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'grade')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Харид қилиш учун қандай платформалар мавжуд?'), 'required' => true])->label(false)?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-box">
                                            <?= $form->field($applicationForm, 'reCaptcha')->widget(ReCaptcha2::class,
                                                [
                                                    'options' => ['class' => 'form-control mb-30',]
                                                ]
                                            )->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-box mt-2 mb-0">
                                            <?=Html::submitButton(Yii::t('app', 'Юбориш').'<span></span>',['class' => 'sec-btn submitForm','style' => 'background-color: #131830'])?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
</section>
