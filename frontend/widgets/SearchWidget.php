<?php

namespace frontend\widgets;

class SearchWidget extends \yii\base\Widget
{
    public function run () {
        return $this->render('search');
    }
}