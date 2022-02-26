<?php

/* @var $photoIndex */
/* @var $Reviews */
/* @var $freeServices */

/* @var $InfoReviews */

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Options;
use yii\helpers\StringHelper;

?>



<?php foreach ($photoIndex as $photo): ?>
    <section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(<?= $photo->getPhoto1('1900', '800', 'zoomCrop', 'transparent', 'center', 'center'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-page-banner-content">
                        <h2 style="color: #ffffff;" class="h2-title wow fadeup-animation"
                            data-wow-delay="0.4s"><?= $photo->getText2(); ?></h2>
                        <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= $photo->getText1(); ?></h1>
                        <a href="/site/problem" class="sec-btn"><?= Yii::t('app', 'Батафсил маълумот') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>
<section class="main-testimonial">
    <div class="container">
        <div class="row">
            <?php foreach ($InfoReviews as $info): ?>
                <div class="col-lg-6 padding">
                    <div class="main-testimonial-box ml-15 mr-15">
                        <p>&quot;<?= StringHelper::truncate(strip_tags($info->getText2()), 100, '...'); ?>"</p>
                        <h3 class="h3-title"><?= $info->getText1(); ?></h3>
                        <a href="<?= $info->link ?>"><span><?= Yii::t('app', 'Батафсил маълумот') ?></span></a>
                        <div class="clinet-img">
                            <img src="<?= $info->getPhoto1('80', '80', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 class="rounded-circle" alt="client">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach ($Reviews as $reviews): ?>
                <div class="col-lg-6">
                    <div class="main-testimonial-box ml-15 mr-15">
                        <p>&quot;<?= StringHelper::truncate(strip_tags($reviews->getText2()), 100, '...'); ?>&quot;.</p>
                        <h3 class="h3-title"><?= $reviews->getText1(); ?></h3>
                        <a href="<?= $reviews->link ?>"><span><?= Yii::t('app', 'Батафсил маълумот') ?></span></a>
                        <div class="clinet-img">
                            <img src="<?= $reviews->getPhoto1('80', '80', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 class="rounded-circle" alt="client">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="main-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-title"><?= Yii::t('app', 'Мигрантлар учун реинтеграцияга ёрдам') ?></h2>
            </div>
        </div>
        <div class="row blog-slider">

            <?php foreach ($migrationInfo as $migration): ?>
                <div class="col-lg-6">
                    <div class="blog-box mob-ml-15 mob-mr-15 wow fadeup-animation" data-wow-delay="0.4s"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                        <div class="blog-img">
                            <img src="<?= $migration->getPhoto1('416', '270', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 alt="Blog-1">
                        </div>
                        <div class="blog-content">
                            <h3 class="h3-title"><?= $migration->getText1(); ?></h3>
                            <a href="<?= $migration->link; ?>"
                               class="link-btn"><?= Yii::t('app', 'Батафсил маълумот') ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="main-newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="newsletter-title">
                    <h2 class="h2-title"><?= Yii::t('app', 'Бизнинг хизматларимиз') ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h2 class="h2-title"><?= Yii::t('app', 'Бепул хизматлар') ?></h2></div>
        </div>
        <div class="row">
            <?php foreach ($freeServices as $freeservices): ?>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="main-service-box mob-mb-15 mob-mb-0 wow fadeup-animation" data-wow-delay="0.3s">
                        <div class="">
                            <img src="<?= $freeservices->getPhoto1('400', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 alt="Finance Management">
                        </div>
                        <h3 class="h3-title"><?= $freeservices->getText1(); ?></h3>
                        <p><?= StringHelper::truncate(strip_tags($freeservices->getText2()), 70, '...'); ?></p>
                        <a href="<?= $freeservices->link ?>" class="arrow-btn"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="main-services" style="background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h2 style="color:#131830;"
                                       class="h2-title"><?= Yii::t('app', 'Пулли хизматлар') ?></h2></div>
        </div>
        <div class="row">
            <?php foreach ($paindServices as $paindservices): ?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div style="background:none;" class="main-service-box mob-mb-15 mob-mb-0 wow fadeup-animation"
                         data-wow-delay="0.3s">
                        <div class="">
                            <img src="<?= $paindservices->getPhoto1('400', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 alt="Finance Management">
                        </div>
                        <h3 style="color:#131830;" class="h3-title"><?= $paindservices->getText1(); ?></h3>
                        <p><?= StringHelper::truncate(strip_tags($paindservices->getText2()), 70, '...'); ?></p>
                        <a href="<?= $paindservices->link ?>" class="arrow-btn"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="main-case-studies" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-title">Фотогалерея</h2>
            </div>
        </div>
        <div class="row case-slider">
            <?php foreach ($photos as $photo): ?>
                <div class="col-lg-4">
                    <div class="main-case-box mob-ml-15 mob-mr-15 wow fadeup-animation" data-wow-delay="0.5s"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeup-animation;">
                        <div class="case-box">
                            <div class="case-img">
                                <a href="<?= $photo->link ?>"><img
                                            src="<?= $photo->getGalleryPhoto('430', '590', 'zoomCrop', 'transparent', 'center', 'center'); ?>"></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="main-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-title"><?= Yii::t('app', 'Янгиликлар') ?></h2>
            </div>
        </div>
        <div class="row blog-slider">
            <?php foreach ($newWrapper as $news): ?>
                <div class="col-lg-4">
                    <div class="blog-box mob-ml-15 mob-mr-15 wow fadeup-animation" data-wow-delay="0.4s"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                        <div class="blog-img">
                            <img src="<?= $news->getPhoto1('400', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 alt="Blog-1">
                        </div>
                        <div class="blog-content">
                            <h3 class="h3-title"><?= StringHelper::truncate(strip_tags($news->getText2()), 70, '...'); ?></h3>
                            <a href="<?= $news->link ?>" class="sec-btn"><?= Yii::t('app', 'Батафсил маълумот') ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<hr>
<section class="main-about">
    <div class="container">
        <?php foreach ($centerHelp as $center): ?>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="about-img-1">
                            <img src="<?= $center->getPhoto1('500', '600', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 data-tilt data-tilt-max="3" alt="about us">
                        </div>
                        <div class="about-img-2">
                            <img src="<?= $center->getPhoto2('300', '300', 'zoomCrop', 'transparent', 'center', 'center'); ?>"
                                 alt="about us">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="main-about-pointbox">
                        <div class="about-point-box ">
                            <img src="/images/tick.png" alt="tick">
                            <div class="about-point-content">
                                <a href=""><p><?= $center->getText1() ?></p></a>
                            </div>
                        </div>
                    </div>
                    <div class="about-content">
                        <p><?= StringHelper::truncate(strip_tags($center->getText2()), 270, '...'); ?></p>
                        <a href="<?= $center->link ?>" class="sec-btn"><?= Yii::t('app', 'Батафсил маълумот') ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="main-simple-step">
    <div class="container">
        <div class="row step-slider">
            <div class="col-lg-12">
                <div class="row simple-step-box mob-mb-15 wow fadeup-animation" data-wow-delay="0.5s">
                    <?php foreach ($applicationSerach as $application): ?>
                    <div class="col-6">
                        <div class="step-icon">
                            <img src="<?= $application->getPhoto1('400', '400', 'zoomCrop', 'transparent', 'center', 'center'); ?>" alt="Step 1">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="step-content">
                            <h3 class="h3-title"><?= $application->getText1() ?></h3>
                            <p><?= $application->getText2() ?></p>
                            <a href="<?= $application->link ?>" class="sec-btn"
                               title="read more"><?= Yii::t('app', 'Батафсил маълумот') ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--Simple Steps End-->
<section class="main-newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.4s"
                 style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="newsletter-title">
                    <h2 class="h2-title"><?= Yii::t('app', 'Менга ёрдам керак') ?></h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="newsletter-form wow fadeInRight" data-wow-delay="0.4s"
                     style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                    <a style="background-color:#131830;" href="/site/contacts" class="sec-btn"
                       title="read more"><?= Yii::t('app', 'Батафсил маълумот') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>


