<?php

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Menu;
use afzalroq\cms\entities\unit\Unit;


$menuTree = Menu::getMenu('footer-main');
$countMenu = count($menuTree);

$paindServices = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'paindservices'])->id])->limit(6)->all();

?>

<section class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 order-lg-1 order-1">
                <div class="logo-content mob-mb-15">
                    <a href="javascript:void(0);"><img src="/images/logom.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-1 order-1">
                <div class="our-links mob-mb-15">
                    <h3 class="h3-title"><?= Yii::t('app' , 'Меню')?></h3>
                    <div class="links-text mob-mb-15">
                        <ul>
                            <?php foreach ($menuTree as $i => $menu): ?>
                                <?php if (empty($menu['children'])): ?>
                                    <li><a style="white-space: nowrap;" href="<?= $menu['link'] ?>"><?= $menu['content'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-4 order-2">
                <div class="contact-us mob-mt-15 mob-mt-0">
                    <h3 class="h3-title"><?=Yii::t('app', 'Биз билан бўгланиш')?></h3>
                    <div class="contact-us-content">
                        <div class="contact-text mb-20">
                            <div class="contact-icon">
                                <img src="/images/location-icon.png" alt="location">
                            </div>
                            <p><?= Unit::get('address')?></p>
                        </div>
                        <div class="contact-text mb-30">
                            <div class="contact-icon">
                                <img src="/images/call-1.png" alt="call">
                            </div>
                            <a href="tel:<?= Unit::get('number')?>"><p><?= Unit::get('number')?></p></a>
                        </div>

                        <div class="contact-text">
                            <div class="contact-icon">
                                <img src="/images/email-1.png" alt="email">
                            </div>
                            <a href="mailto:<?= Unit::get('email')?>"><p><?= Unit::get('email')?></p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-4 order-2">
                <div class="our-links mob-mb-15">
                    <h3 style="white-space: nowrap;" class="h3-title"><?= Yii::t('app', 'Бизнинг хизматларимиз') ?></h3>
                    <div class="links-text">
                        <ul>
                            <?php foreach ($paindServices as $paindservices): ?>
                            <li><a style="white-space: nowrap;" href="<?= $paindservices->link?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?= $paindservices->getText1()?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright-bg">
            <div class="col-xl-6 col-lg-6 col-md-7">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-5">
                <div class="social-media-footer">
                    <a target="_blank" href="<?= Unit::get('facebook')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a target="_blank" href="<?= Unit::get('instagram')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a target="_blank" href="<?= Unit::get('telegram')?>"><img style="width: 1rem" src="/images/telegram.png"></a>
                    <a target="_blank" href="<?= Unit::get('twitter')?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->
