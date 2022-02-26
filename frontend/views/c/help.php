<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget;
?>

<!-- Banner Start-->
<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(/images/blog-detail-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app', 'Кўп сўраладиган саволлар')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End-->

<!--Blog Detail Start-->
<section class="main-blog-detail-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-comment">
                    <h2 class="h2-title"><?= Yii::t('app', 'Кўп сўраладиган саволлар')?></h2>
                    <?php foreach ($pageInner as $page): ?>
                    <div class="comment-box odd wow fadeup-animation" data-wow-delay="0.4s">
                        <div class="comment-img rounded-circle" style="background-image: url(/images/comment-1.jpg);"></div>
                        <div class="comment-content">
                            <h3 class="h3-title"><?=$item->getText1()?></h3>
                            <p><?=$item->getText2()?></p>
                            <div class="blog-social-content">
                                <div class="blog-social-media">
                                    <a target="_blank" href="<?= Unit::get('facebook')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a target="_blank" href="<?= Unit::get('instagram')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a target="_blank" href="<?= Unit::get('twitter')?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>


<?php ContactWidget::Widget();?>

