<?php

use yii\helpers\StringHelper;
?>
<div class="col-lg-6 col-md-6 col-sm-9">
    <div class="news-item ">
        <div class="news-thumb">
            <img src="<?= $model->getPhoto1('370', '280', 'zoomCrop', 'transparent', 'center', 'center'); ?>" alt="news">
        </div>
        <div class="news-content ">
                <a style="font-size: 20px;color: #777777;" href="<?= $model->link ?>"><?= StringHelper::truncate(strip_tags($model->getText1()), 100, '...'); ?></a>
        </div>
    </div>
    <br>
</div>

