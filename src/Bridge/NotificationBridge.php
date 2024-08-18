<?php

namespace App\Bridge;

abstract class NotificationBridge
{
    protected NotificationSenderBridge $sender;

    public function __construct(NotificationSenderBridge $sender)
    {
        $this->sender = $sender;
    }

    abstract public function send(): void;
}