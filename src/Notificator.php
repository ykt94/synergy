<?php

namespace App;

/**
 * Class Notificator
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
abstract class Notificator
{
    /**
     * @return Messenger
     */
    abstract function getNotificator(): Messenger;

    /**
     * @param string $message
     * @return void
     */
    public function sendMessage(string $message): void
    {
        $messenger = $this->getNotificator();
        $messenger->send($message);
    }
}
