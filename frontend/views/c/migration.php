<?php

/* @var $siteBars */
use afzalroq\cms\entities\unit\Unit;

?>

<section class="main-inner-banner back-img" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url(<?= Unit::get('contactimages') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation"
                        data-wow-delay="0.4s"><?= $migrationInfo->getText1()?></h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/"><?= Yii::t('app', 'Aсосий') ?></a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href=""></a><?= $migrationInfo->getText1()?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-faq faq-flot" style="background-color: #f3f4f8;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-img" style="background-image: url(<?= $migrationInfo->getPhoto1('1000', '500', 'zoomCrop', 'transparent', 'center', 'center'); ?>);">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-content">
                    <h2 style="font-size: 30px;line-height:30px;color:#131730;" class="h2-title"><?= $migrationInfo->getText2()?></h2>
                    <div class="accordion faq-box" id="accordionExample">
                        <?php foreach ($listText as $key =>  $list):?>
                        <div class="accordion-item faq-bg wow fadeup-animation" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeup-animation;">
                            <h3 class="accordion-header h3-title" id="headingOne<?=$key?>">
                                <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?=$key?>" aria-expanded="true" aria-controls="collapseOne<?=$key?>">
                                    <?=$list->getText1();?><span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                </button>
                            </h3>
                            <div id="collapseOne<?=$key?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?=$key?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><?=$list->getText2();?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
