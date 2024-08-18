<?php

namespace App\Adapter;

class ModernSMSSystemAdapter implements ModernNotificationSystemAdapter
{
    public function send(string $recipient, string $message): void
    {
        echo "Modern SMS System: Sending SMS to {$recipient} with message: {$message}\n";
    }
}