<?php

namespace App\Adapter;

class ModernEmailSystemAdapter implements ModernNotificationSystemAdapter
{
    public function send(string $recipient, string $message): void
    {
        echo "Modern Email System: Sending email to {$recipient} with message: {$message}\n";
    }
}