<?php

namespace App\Bridge;

class SMSSenderBridge implements NotificationSenderBridge
{
    public function send(string $recipient, string $message): void
    {
        echo "Sending SMS to {$recipient}: {$message}\n";
    }
}