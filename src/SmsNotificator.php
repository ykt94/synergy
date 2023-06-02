<?php

namespace App;

/**
 * Class SmsNotificator
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class SmsNotificator extends Notificator
{
    /**
     * @return Messenger
     */
    public function getNotificator(): Messenger
    {
        return new Sms();
    }
}
