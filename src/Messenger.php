<?php

namespace App;

interface Messenger
{
    /**
     * @param string $text
     * @return void
     */
    public function send(string $text): void;

}
