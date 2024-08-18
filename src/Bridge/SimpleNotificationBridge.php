<?php

namespace App\Bridge;

class SimpleNotificationBridge extends NotificationBridge
{

    public function __construct(
        NotificationSenderBridge $sender, 
        private string $recipient, 
        private string $message
    ) {
        parent::__construct($sender);
    }

    public function send(): void
    {
        $this->sender->send($this->recipient, $this->message);
    }
}