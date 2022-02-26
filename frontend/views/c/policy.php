<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\SearchWidget; ?>


<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('service') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?=$item->getText1();?></a></li>
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
                <div class="case-detail-img wow fadeup-animation" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">
                    <img src="<?= $item->getPhoto1('1320', '600', 'zoomCrop', 'transparent', 'center', 'center'); ?> " data-tilt="" data-tilt-max="3" alt="Case Detail" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="case-detail-text-box">
                    <h2 class="h2-title"><?=$item->getText1();?></h2>
                    <p><?=$item->getText2();?></p>
                      </div>
            </div>
            <div class="case-detail-text-box col-lg-4 wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                <div class="blog-list-sidebar wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                  <?= SearchWidget::widget();?>
                    <br><br>
                    <div class="category-box wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                        <h2 class="h2-title"><?= Yii::t('app', 'Муаммолар')?></h2>
                        <ul>
                           <?php foreach ($bannerProblem as $problem): ?>
                            <li><a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$problem->getText1()?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>