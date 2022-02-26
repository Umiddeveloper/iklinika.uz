<?php

use afzalroq\cms\entities\front\Menu;
use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\LanguagesWidget;
use yii\helpers\Url;

$menuTree = Menu::getMenu('main');
?>

<div class="searchBox">
    <div class="searchBoxContainer">
        <a href="javascript:void(0);" class="closeBtn">
            <svg viewBox="0 0 413.348 413.348" xmlns="http://www.w3.org/2000/svg">
                <path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"></path>
            </svg>
        </a>
        <form id="SearchForm" method="get" action="<?= Url::to(['site/search'])?>">
            <div class="search_bar_inner">
                <input type="text" name="q" placeholder="<?= Yii::t('app', 'Бу йерда қидиринг...'); ?>">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
    </div>
</div>
<header class="site-header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="header-contact">
                        <a  href="mailto:<?= Unit::get('email')?>"><span><img src="/images/email.png"></span><?= Unit::get('email')?></a>
                        <a href="tel:<?=Unit::get('number')?>"><span><img src="/images/call.png"></span><?=Unit::get('number')?></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="Social-midea">
                        <i style="color: #fff;" class="fa fa-map-marker" aria-hidden="true"><a id="select" href="#"><?= Yii::t('app', 'Ҳудудни аниқланг')?></a></i>
                        <a target="_blank" href="<?= Unit::get('facebook')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a target="_blank" href="<?= Unit::get('instagram')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a target="_blank" href="<?= Unit::get('telegram')?>"><img style="width: 1rem" src="/images/telegram.png"></a>
                        <a target="_blank" href="<?= Unit::get('twitter')?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a target="_blank" href="/site/sitemap"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="col-middle specialFeatured">
                        <a href="#" class="specialFeaturedBtn">
                            <span> <i id="glasses" class="fa fa-eye"></i></span>
                            <span class="special_inner"><?=Yii::t('app' , 'махсус имконийатлар')?></span>
                        </a>
                        <div class="specialFeaturedBlock">
                            <div class="specialFeaturedBlockWraps">
                                <span><?=Yii::t('app' , 'Ко`риниш:')?></span>
                                <div class="typeView">
                                    <a href="javascript:void(0);" class="default">A</a>
                                    <a href="javascript:void(0);" class="blackWhite">A</a>
                                </div>
                                <span><?=Yii::t('app', 'Шрифт ўлчами:')?></span>
                                <div class="typeSizeFonts">
                                    <ul>
                                        <li class="inc1">
                                            <input type="radio" id="inc1" name="selector">
                                            <label for="inc1">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc2">
                                            <input type="radio" id="inc2" name="selector">
                                            <label for="inc2">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc3">
                                            <input type="radio" id="inc3" name="selector">
                                            <label for="inc3">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc4">
                                            <input type="radio" id="inc4" name="selector">
                                            <label for="inc4">A</label>
                                            <div class="check"></div>
                                        </li>
                                        <li class="inc5">
                                            <input type="radio" id="inc5" name="selector">
                                            <label for="inc5">A</label>
                                            <div class="check"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="site-branding">
                        <a href="/" title="Misaru">
                            <img src="/images/logom.png" alt="Logo">
                            <img src="/images/logob.png" class="sticky-logo" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header-menu">
                        <nav class="main-navigation">
                            <button class="toggle-button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="menu">
                                <?php foreach ($menuTree as $i => $menu): ?>
                                    <?php if (empty($menu['children'])): ?>
                                        <li class="">
                                            <a href="<?= $menu['link'] ?>"><?= $menu['content'] ?></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="sub-items" <?= $i ?>">
                                        <a href=""><?= $menu['content'] ?></a>
                                        <ul class="sub-menu" id="site-nav__<?= $i ?>">
                                            <?php foreach ($menu['children'] as $child): ?>
                                                <li><a href="<?= $child['link'] ?>"><?= $child['content'] ?> </a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <li class="sub-items ">
                                    <a href="javascript:void(0);"><?= Yii::$app->params['cms']['languages'][Yii::$app->params['cms']['languageIds'][Yii::$app->language]] ?></a>
                                    <ul class="sub-menu">
                                        <?= LanguagesWidget::widget(); ?>
                                    </ul>
                                </li>
                                <li class="header-search"><a class="searchBtn" href="javascript:void(0);"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




