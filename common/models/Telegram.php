<?php

namespace common\models;

class Telegram
{
    public $text;
    private $_token = '1981786335:AAE3Plv4QmEVIQhe6wOkd0c3FjKmNTWM6Hk';
    private $_chatId = '-650018477';
    private $_params = [];

    public function __construct($text)
    {
        $this->_params = [
            'chat_id' => $this->_chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ];
    }

    public function sendMessage()
    {
        return file_get_contents('https://api.telegram.org/bot' . $this->_token . '/sendMessage?' . http_build_query($this->_params));
    }

}




