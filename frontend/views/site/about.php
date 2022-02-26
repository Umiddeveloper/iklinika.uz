<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget;

$this->title = "About"
?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('aboutus')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= Yii::t('app','Бизнинг мутахассисларимиз')?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app','Бизнинг мутахассисларимиз')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-team">
    <div class="container">
        <div class="row main-team-slider">
            <?php foreach ($aboutCollegion as $specialist): ?>
                <div class="col-lg-3">
                    <div class="team-box ml-15 mr-15 wow fadeup-animation" data-wow-delay="0.3s">
                        <div class="team-img">
                            <img src="<?= $specialist->getPhoto1('270', '370', 'zoomCrop', 'transparent', 'center', 'center') ?>" alt="Member-1">
                        </div>
                        <div class="main-team-social">
                            <div class="team-social">
                                <a target="_blank" href="<?= $specialist->getText5()?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a target="_blank" href="<?= $specialist->getText3()?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a target="_blank" href="<?= $specialist->getText4()?>"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                                <a target="_blank" href="<?= $specialist->getText6()?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="h3-title"><?= $specialist->getText1()?></h3>
                            <span><?= $specialist->getText2()?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<section class="main-video">
    <div class="video-bg-img jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('videodoc')?>)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-content">
                    <h2 class="h2-title wow fadeup-animation" data-wow-delay="0.4s">Видео блок</h2>
                </div>
                <div class="play-btn wow fadeup-animation" data-wow-delay="0.4s">
                    <a href="javascript:void(0);" class="video-play-icon" title="Play Video"><span><i class="fa fa-play" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-partner-logo-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="partner-title-in">
                    <h3 class="h3-title">Партнеры</h3>
                </div>
            </div>
        </div>
        <div class="row partners-slider">
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-1.png" alt="Brand-1">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-2.png" alt="Brand-2">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-3.png" alt="Brand-3">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-4.png" alt="Brand-4">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-5.png" alt="Brand-5">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-6.png" alt="Brand-6">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="partners-box">
                    <img src="/images/brand-dark-4.png" alt="Brand-4">
                </div>
            </div>
        </div>
    </div>
</section>

<?php ContactWidget:: Widget(); ?>




