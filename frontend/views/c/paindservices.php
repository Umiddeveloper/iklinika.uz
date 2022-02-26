<?php
/* @var $item */

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget;
use frontend\widgets\SearchWidget;
use yii\helpers\StringHelper;
use yii\helpers\Url;

?>


<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url(<?= Unit::get('service') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= $item->getText1() ?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий') ?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= $item->getText1() ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-service-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-detail">
                    <h2 class="h2-title"><?= $item->getText1() ?></h2>
                    <p><?= $item->getText2() ?></p>
                    <img src="<?= $item->getPhoto1('900', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>" data-tilt data-tilt-max="3" alt="service detail">
                </div>
                <br><br>
                    <div class="contact-help-box wow fadeup-animation" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">
                            <a target="_blank" href="<?= $item->getText3();?>" class="sec-btn"><?= Yii::t('app', 'Буюртма қилиш') ?></a>
                        <div class="contact-help-content">
                            <h3 class="h3-title"><?= $item->getText1() ?></h3>
                            <p><?= StringHelper::truncate(strip_tags($item->getText2()), 150, '...'); ?></p>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="service-detail-box">
                    <h2 style="font-size: 37px;" class="h2-title"><?= Yii::t('app', 'Бизнинг хизматларимиз') ?></h2>
                    <?php foreach ($Services as $services): ?>
                        <div class="service-detail-box-list">
                            <div class="service-list-box wow fadeup-animation" data-wow-delay="0.3s">
                                <a href="<?=$services->link?>">
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></li>
                                        <li><a href="<?=$services->link?>"></a><?= $services->getText1(); ?></li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div style="display:block; " class="service-detail-contact wow fadeup-animation"
                         data-wow-delay="0.4s">
                        <h3 class="h3-title"><?= Yii::t('app', 'Aгар сизга ёрдам керак бўлса, биз билан боғланинг') ?></h3>
                        <a href="" title="Call now"><?= Unit::get('number')?></a>
                    </div>
                    <br><br>
                    <?= SearchWidget::widget(); ?>
                </div>
            </div>
        </div>
    </div>
</section>





