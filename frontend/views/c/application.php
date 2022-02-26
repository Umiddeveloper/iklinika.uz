<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget; ?>
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

<?= ContactWidget::widget() ?>
