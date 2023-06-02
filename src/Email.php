<?php

namespace App;

/**
 * Class Email
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class Email implements Messenger
{
    /**
     * @param string $text
     * @return void
     */
    public function send(string $text): void
    {
        echo 'Сообщение по емайл отправлено: ' . $text . '<br>';
    }
}
