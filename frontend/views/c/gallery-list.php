<?php

use afzalroq\cms\entities\unit\Unit; ?>
<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url(<?= Unit::get('service') ?>););">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s">Фотогалерея</h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?=Yii::t('app' , 'Фотогалерея')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-case-studies">
    <div class="container">
        <div id="lightgallery">
            <?php foreach ($item->photos as $photo): ?>
                <a href="<?= $photo->getPhoto('1024', '800', 'scaleResize', 'transparent', 'center', 'center') ?>">
                    <img class="pt-1" src="<?= $photo->getPhoto('400', '500', 'zoomCrop', 'transparent', 'center', 'center') ?>"/>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>