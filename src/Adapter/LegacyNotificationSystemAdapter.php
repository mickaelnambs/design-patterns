<?php

namespace App\Adapter;

interface LegacyNotificationSystemAdapter
{
    public function sendNotification(array $data): void;
}