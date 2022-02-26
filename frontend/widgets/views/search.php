<?php

use yii\helpers\Url; ?>

<div class="blog-search-from">
    <form id="SerachForm" method="get" action="<?= Url::to(['site/search'])?>">
        <div class="form-box">
            <input type="text" name="q" placeholder="<?= Yii::t('app', 'Бу йерда қидиринг...'); ?>">
            <button type="submit" class="sec-btn"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
        </div>
    </form>
</div>
