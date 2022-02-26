<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget;
use frontend\widgets\SearchWidget; ?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('service') ?>););">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= $item->getText1()?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= $item->getText1()?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-blog-detail-in" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="h3-title pt-0"><?= $item->getText1()?></h3>
                <div class="comment-box odd wow fadeup-animation pt-4" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                    <div class="comment-content">
                        <h3 class="h3-title"><?= $item->getText2()?></h3>
                        <p><?= $item->getText3()?></p>
                        <div class="blog-social-content">
                            <ul>
                                <li><a href="javascript:void(0);"><img src="/images/author.png" alt="author"><span><?= $item->getText4()?></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-list-sidebar">
                      <?= SearchWidget::widget();?>
                   <br>
                    <div class="category-box wow fadeup-animation" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeup-animation;">
                        <h2 class="h2-title"><?= Yii::t('app', 'Муаммолар')?></h2>
                        <ul>
                            <?php foreach ($bannerProblem as $all): ?>
                                <li><a href="<?=$all->link?>"><?= $all->getText1(); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= ContactWidget::widget();?>




