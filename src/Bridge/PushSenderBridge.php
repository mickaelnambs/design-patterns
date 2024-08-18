<?php

namespace App\Bridge;

class PushSenderBridge implements NotificationSenderBridge
{
    public function send(string $recipient, string $message): void
    {
        echo "Sending Push Notification to {$recipient}: {$message}\n";
    }
}