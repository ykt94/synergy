<?php

namespace App;

/**
 * Class EmailNotificator
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class EmailNotificator extends Notificator
{
    /**
     * @return Messenger
     */
    public function getNotificator(): Messenger
    {
        return new Email();
    }
}
