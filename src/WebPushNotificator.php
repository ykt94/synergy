<?php

namespace App;

/**
 * Class WebPushNotificator
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class WebPushNotificator extends Notificator
{
    /**
     * @return Messenger
     */
    public function getNotificator(): Messenger
    {
        return new WebPush();
    }
}
