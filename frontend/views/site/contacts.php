<?php
/* @var $this yii\web\View */
/* @var $contactForm */

/* @var $form yii\widgets\ActiveForm */

use afzalroq\cms\entities\unit\Unit;
use himiklab\yii2\recaptcha\ReCaptcha2;
use common\widgets\Alert;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Contacts');
?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?=Unit::get('contact')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= Yii::t('app' , 'Менга ёрдам керак')?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app' , 'Менга ёрдам керак')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-we-are-here-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-help-box wow fadeup-animation" data-wow-delay="0.3s">
                    <div class="contact-help-icon rounded-circle">
                        <a href=""><img src="/images/location-icon-2.png" alt="location"></a>
                    </div>
                    <div class="contact-help-content">
                        <h3 class="h3-title"><?=Yii::t('app', 'Бизнинг манзил')?></h3>
                        <p><?= Unit::get('address')?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-help-box wow fadeup-animation" data-wow-delay="0.4s">
                    <div class="contact-help-icon rounded-circle">
                        <a href="<?=Unit::get('zoom')?>"><i style="color: #fff; font-size: 30px " class="fa fa-video-camera"></i></a>
                    </div>
                    <div class="contact-help-content">
                        <h3 class="h3-title"><?=Yii::t('app', 'Видео қўнғироқ')?></h3>
                        <a href="<?=Unit::get('zoom')?>"><p>Zoom</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-help-box wow fadeup-animation" data-wow-delay="0.5s">
                    <div class="contact-help-icon rounded-circle">
                        <a href="tel:<?= Unit::get('number')?>"><img src="/images/call-2.png" alt="location"></a>
                    </div>
                    <div class="contact-help-content">
                        <h3 class="h3-title"><?=Yii::t('app', 'Биз билан бўгланиш')?></h3>
                        <a href="tel:<?= Unit::get('number')?>"><p><?= Unit::get('number')?></p></a>
                        <a href="mailto:<?= Unit::get('email')?>"><p><?= Unit::get('email')?></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= Alert::widget(); ?>
<section class="main-contact-touch-in">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="contact-touch-map">
                    <iframe src="https://www.google.com/maps/embed?pbfron=!1m14!1m12!1m3!1d58345.8370356026!2d90.39051679999999!3d23.938690100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1603517982898!5m2!1sen!2sbd" width="416" height="570" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="contact-form mt-5">
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-box">
                                    <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Исмингиз (тахаллусингиз)')])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <?= $form->field($contactForm, 'phone')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Алоқа учун контактлар (телефон рақами)')])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box">
                                    <?= $form->field($contactForm, 'email')->textInput(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Електрон почтангизни киритинг')])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-box">
                                    <?= $form->field($contactForm, 'body')->textarea(['class' => 'form-input', 'placeholder' => Yii::t('app', 'Хабарингизни киритинг')])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <?= $form->field($contactForm, 'reCaptcha')->widget(ReCaptcha2::class,
                                    [
                                        'options' => ['class' => 'form-control mb-30']
                                    ]
                                )->label(false) ?>
                            </div>
                            <div class="col-12">
                                <div class="form-box mt-2 mb-0">
                                    <?=Html::submitButton(Yii::t('app', 'Юбориш').'<span></span>',['class' => 'sec-btn submitForm'])?>
                                </div>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

