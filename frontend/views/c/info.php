<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget;

?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url(<?= Unit::get('service') ?>););">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= $item->getText1() ?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= $item->getText1() ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-blog-list-in pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-list-box wow fadeup-animation" data-wow-delay="0.4s">
                    <div class="blog-list-img">
                        <img src="<?= $item->getPhoto1('1000', '500', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                             alt="blog 1">
                    </div>
                    <div class="blog-list-text">
                        <h3 class="h3-title"><?= $item->getText1() ?></h3>
                        <p><?= $item->getText2() ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="category-box wow fadeup-animation" data-wow-delay="0.4s"
                     style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                    <h2 class="h2-title"><?= Yii::t('app', 'Муаммолар') ?></h2>
                    <ul>
                        <?php foreach ($bannerProblem as $all): ?>
                            <li><a href="<?= $all->link ?>"><i class="fa fa-angle-right"
                                                               aria-hidden="true"></i><?= $all->getText1(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="main-pricing-in pt-0">
    <div class="container">
        <div class="row">
            <?php foreach ($infoFile as $file): ?>
            <div class="col-lg-4 pb-4">
                <div class="pricing-box wow fadeup-animation" data-wow-delay="0.4s"
                     style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                    <h3 style="font-size: 20px" class="h3-title"><?=$file->getText1()?></h3>
                    <p><i style="font-size: 30px;" class="fa fa-folder" aria-hidden="true"></i></p>
                    <div class="price-line"></div>
                    <a download href="<?=$file->getFile2()?>" class="sec-btn" title="Choose Plan"><?= Yii::t('app', 'Юклаб олиш')?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?= ContactWidget::widget(); ?>




