<?php

namespace App\Adapter;

class LegacyToModernNotificationAdapter implements ModernNotificationSystemAdapter
{
    public function __construct(
        private LegacyNotificationSystemAdapter $legacySystem
    ) {
    }

    public function send(string $recipient, string $message): void
    {
        $data = [
            'to' => $recipient,
            'body' => $message
        ];
        $this->legacySystem->sendNotification($data);
    }
}