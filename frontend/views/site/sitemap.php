<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\SearchWidget;
use yii\helpers\StringHelper;


$this->title = "Sitemap"
?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('aboutus')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= Yii::t('app','Сайт харитаси')?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app','Сайт харитаси')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="main-sitemap" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="h3-title"><a href="/"><?= Yii::t('app', 'Aсосий')?></a></h3>
                    <ul>
                        <li><a href="https://iklinika.uz/ru/site/about">Наши специалисты</a></li>
                        <li><a href="https://iklinika.uz/ru/e/page/22-chasto-zadavayemyye-voprosy">Часто задаваемые вопросы</a></li>
                        <li><a href="https://iklinika.uz/ru/site/contacts">Политика использования приложения</a></li>
                        <li><a href="https://iklinika.uz/ru/site/contacts">Помощь</a></li>
                        <li><a href="https://iklinika.uz/ru/e/policy/46-politika-ispol-zovaniya-prilozheniya">Политика использования приложения </a></li>
                    </ul>
                    <h3 class="h3-title"><a href="https://iklinika.uz/ru/site/problem"><?= Yii::t('app', 'Муаммолар')?></a></h3>
                    <ul>
                        <?php foreach ($bannerProblem as $problem): ?>
                        <li><a href="<?=$problem->link?>"><?= $problem->getText1()?></a></li>
                        <?php endforeach; ?>
                    </ul>

                    <?php foreach ($Reviews as $reviews): ?>
                        <ul>
                            <li><a href="<?= $reviews->link?>"><?= $reviews->getText1(); ?></a></li>
                        </ul>
                    <?php endforeach; ?>
                    <?php foreach ($migrationInfo as $migration): ?>
                        <ul>
                            <li><a href="<?= $migration->link?>"><?= $migration->getText1(); ?></a></li>
                        </ul>
                    <?php endforeach; ?>
                    <h3 class="h3_title"><a href=""><?=Yii::t('app' , 'Янгиликлар')?></a></h3>
                    <ul>
                        <?php foreach ($newWrapper as $news): ?>
                        <li><a href="<?= $news->link ?>"><?=$news->getText2(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php foreach ($centerHelp as $center): ?>
                    <h3 class="h3_title"><a href=""><?=$center->getText1(); ?></a></h3>
                    <ul>
                        <li>
                            <a href="<?= $center->link ?>"><?=$center->getText1(); ?></a>
                        </li>
                    </ul>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-4">
                    <div class="service-detail-box">
                        <h2 style="font-size: 37px;" class="h2-title"><?= Yii::t('app', 'Бизнинг хизматларимиз') ?></h2>
                        <?php foreach ($freeServices as $freeServices): ?>
                            <div class="service-detail-box-list">
                                <div class="service-list-box wow fadeup-animation" data-wow-delay="0.3s">
                                    <a href="<?=$freeServices->link?>">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></li>
                                            <li><a href="<?=$freeServices->link?>"></a><?= $freeServices->getText1(); ?></li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div style="display:block; " class="service-detail-contact wow fadeup-animation"
                             data-wow-delay="0.4s">
                            <h3 class="h3-title"><?= Yii::t('app', 'Aгар сизга ёрдам керак бўлса, биз билан боғланинг') ?></h3>
                            <a href="" title="Call now"><?= Unit::get('number')?></a>
                        </div>
                        <br><br>
                        <?= SearchWidget::widget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>