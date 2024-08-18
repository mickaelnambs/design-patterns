<?php

namespace App\Adapter;

class LegacyEmailSystemAdapter implements LegacyNotificationSystemAdapter
{
    public function sendNotification(array $data): void
    {
        echo "Legacy Email System: Sending email to {$data['to']} with message: {$data['body']}\n";
    }
}