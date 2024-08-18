<?php

namespace App\Bridge;

class PriorityNotificationBridge extends NotificationBridge
{
    public function __construct(
        NotificationSenderBridge $sender, 
        private string $recipient, 
        private string $message, 
        private int $priority
    ) {
        parent::__construct($sender);
    }

    public function send(): void
    {
        $priorityPrefix = str_repeat("!", $this->priority);
        $this->sender->send($this->recipient, "{$priorityPrefix} {$this->message}");
    }
}