<?php use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\SearchWidget; ?>

<section class="main-inner-banner back-img" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: none; z-index: 0;" data-jarallax-original-styles="background-image: url(<?= Unit::get('contactimages')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;"><?=Yii::t('app' , 'Янгиликлар')?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий') ?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?=Yii::t('app' , 'Янгиликлар')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://localhost:63342/Misaru%20-%20Finance%20Consulting%20PSD%20Template/main-file/assets/images/blog-detail-banner.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1596px; height: 598.8px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 4.6px; transform: translate3d(0px, 261.8px, 0px);"></div></div></section>

<section class="main-blog-detail-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="h3-title"><?= $item->getText1() ?></h3>
                <div class="blog-detail-img wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                    <img src="<?= $item->getPhoto1('880', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>" alt="blog 1">
                </div>
                <p><?= $item->getText2(); ?></p>
            </div>
            <div class="col-lg-4" style="padding-top: 44px;">
                <div class="blog-list-sidebar">
                   <?= SearchWidget::widget();?>
                    <br>
                    <div class="category-box wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
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
    </div>
</section>



