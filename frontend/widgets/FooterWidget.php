<?php

namespace frontend\widgets;

class FooterWidget extends \yii\base\Widget
{
    public function run () {
        return $this->render('footer');
    }
}