<?php use afzalroq\cms\entities\unit\Unit; ?>

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
                    <img src="<?= $item->getPhoto1('900', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                         data-tilt data-tilt-max="3" alt="service detail">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="category-box wow fadeup-animation" data-wow-delay="0.4s">
                    <h2 class="h2-title"><?= Yii::t('app', 'Бепул хизматлар'); ?></h2>
                    <ul>
                        <?php foreach ($Services as $services): ?>
                        <li><a href="<?= $services->link?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $services->getText1(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <br><br>
                <div class="category-box wow fadeup-animation" data-wow-delay="0.4s"">
                    <h2 class="h2-title"><?= Yii::t('app', 'Пулли хизматлар') ?></h2>
                        <ul>
                            <?php foreach ($painServices as $services): ?>
                                <li><a href="<?= $services->link?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $services->getText1(); ?></a></li>
                            <?php endforeach; ?>

                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>