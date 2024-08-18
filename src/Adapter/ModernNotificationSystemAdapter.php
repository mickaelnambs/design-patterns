<?php

namespace App\Adapter;

interface ModernNotificationSystemAdapter
{
    public function send(string $recipient, string $message): void;
}