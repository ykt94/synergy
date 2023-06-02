<?php

namespace App;

/**
 * Class WebPush
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class WebPush implements Messenger
{
    /**
     * @param string $text
     * @return void
     */
    public function send(string $text): void
    {
        echo 'Сообщение по webPush отправлено: ' . $text . '<br>';
    }
}
