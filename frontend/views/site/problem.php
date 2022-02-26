<?php

use afzalroq\cms\entities\unit\Unit;

?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url(<?=Unit::get('contactimages')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= Yii::t('app', 'Данное приложение направлено на оказание помощи людям, оказавшимся в сложной ситуации')?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app', 'Муаммолар')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-case-studies-in">
    <div class="container">
        <div class="row">
            <?php foreach ($bannerProblem as $problem): ?>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="main-case-box wow fadeup-animation" data-wow-delay="0.3s">
                    <div class="case-box">
                        <div class="case-img">
                            <img src="<?= $problem->getPhoto1('370', '500', 'zoomCrop', 'transparent', 'right', 'center') ?>" alt="case 1">
                        </div>
                        <div class="case-content">
                            <h3 class="h3-title case-title"><a href="<?=$problem->link?>"><?= $problem->getText1()?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


