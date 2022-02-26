<?php

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\SearchWidget;
use yii\widgets\ListView; ?>
<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= Unit::get('aboutus')?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s"><?= Yii::t('app', 'ҚИДИРМОҚ') ?>:  <?= $search ?>  </h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий')?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""><?= Yii::t('app', 'ҚИДИРМОҚ') ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-blog-list-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content">
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemOptions' => [
                            'tag' => false,
                        ],
                        'layout' => "{items}",
                        'itemView' => '_item',
                        'options' => ['tag' => false, 'id' => false],
                        'pager' => [
                            'options' => [
                                'class' => 'pagination'
                            ],
                            'nextPageLabel' => 'Next',
                            'linkOptions' => ['class' => 'page-link'],
                            'firstPageCssClass' => 'page-link',
                            'lastPageCssClass' => 'page-link',
                            'prevPageLabel' => 'Previous',
                            'disabledListItemSubTagOptions' => ['tag' => 'a'],
                            'disabledPageCssClass' => '',
                            'prevPageCssClass' => 'text-light',
                            'nextPageCssClass' => 'text-light',
                        ]
                    ])
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-list-sidebar wow fadeup-animation" data-wow-delay="0.4s">
                    <?= SearchWidget::widget(); ?>
                    <br><br>
                    <div class="category-box wow fadeup-animation" data-wow-delay="0.4s">
                        <h2 class="h2-title"><?= Yii::t('app', 'Пулли хизматлар') ?></h2>
                        <ul>
                            <?php foreach ($painServices as $services): ?>
                            <li><a href="<?= $services->link?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?=$services->getText1()?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>