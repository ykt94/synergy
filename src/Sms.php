<?php

namespace App;

/**
 * Class Sms
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class Sms implements Messenger
{
    /**
     * @param string $text
     * @return void
     */
    public function send(string $text): void
    {
        echo 'Сообщение по sms отправлено: ' . $text . '<br>';
    }
}
