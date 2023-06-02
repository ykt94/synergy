<?php

namespace App;

/**
 * Class NotificationService
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class NotificationService
{
    /**
     * @param Notificator $notificator
     * @param string $text
     * @return void
     */
    public function notify(Notificator $notificator, string $text): void
    {
        $notificator->sendMessage($text);
    }
}
