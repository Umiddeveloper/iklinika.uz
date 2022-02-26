<?php

namespace frontend\models;

use common\models\Contacts;
use common\models\Telegram;
use himiklab\yii2\recaptcha\ReCaptchaValidator2;
use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $body;
    public $reCaptcha;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','phone', 'body'], 'required'],
            [['name','phone', 'email'], 'string', 'max' => 255],
            ['body', 'string'],

            // verifyCode needs to be entered correctly
            [['reCaptcha'], ReCaptchaValidator2::class, 'uncheckedMessage' => Yii::t('app', 'Пожалуйста, подтвердите, что вы не бот.')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'email' => "Электронное письмо",
            'body' => 'Текст сообщения',
            'verifyCode' => 'Verification Code',
        ];
    }

    public function save()
    {
        $contact = new Contacts();
        $contact->name = htmlspecialchars($this->name);
        $contact->email = '';
        $contact->phone = $this->phone;
        $contact->subject = '';
        $contact->text = $this->body;
        $contact->save();

;
        $text = "<b style='color: red;'>Новое сообщение</b> \n" .
            "<b>Имя</b>:" . $this->name. "\n" .
            "<b>Тел.номер</b>: ".$this->phone. "\n".
            "<b>Электронное письмо</b>: " . $this->email . "\n" .
            "<b>Текст</b>: " . $this->body . "\n" ;
        (new Telegram($text))->sendMessage();

    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }

    public function sendTg()
    {

    }

}