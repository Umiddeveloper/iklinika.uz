<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget; ?>


<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('contactimages')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= Yii::t('app', 'Муаммолар ҳақида')?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app', 'Муаммолар')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= $item->getText1()?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-case-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-detail-img wow fadeup-animation" data-wow-delay="0.3s">
                    <img src="<?= $item->getPhoto1('1320', '600', 'zoomCrop', 'transparent', 'right', 'center') ?>" data-tilt data-tilt-max="3" alt="Case Detail">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="case-detail-text-box">
                    <p><?= $item->getText2()?></p>
                </div>
            </div>
            <div style="margin-top:50px; " class="col-lg-4">
            <div class="case-detail-text-box category-box wow fadeup-animation" data-wow-delay="0.4s">
                <h2 class="h2-title"><?= Yii::t('app', 'Муаммолар')?></h2>
                <ul>
                    <?php foreach ($bannerProblem as $all): ?>
                    <li><a href="<?=$all->link?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $all->getText1(); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>
<?= ContactWidget::widget();?>



