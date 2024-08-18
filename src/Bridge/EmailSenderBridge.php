<?php

namespace App\Bridge;

class EmailSenderBridge implements NotificationSenderBridge
{
    public function send(string $recipient, string $message): void
    {
        echo "Sending Email to {$recipient}: {$message}\n";
    }
}