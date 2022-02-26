<?php

namespace frontend\widgets;

use frontend\models\ApplicationForm;

class ContactWidget extends \yii\base\Widget
{
    public function run()
    {
        $applicationForm = new ApplicationForm();
        return $this->render('contact', [
            'applicationForm' => $applicationForm
        ]);
    }
}