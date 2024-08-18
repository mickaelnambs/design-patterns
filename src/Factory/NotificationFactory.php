<?php

namespace App\Factory;

use App\Strategy\EmailNotificationStrategy;
use App\Strategy\NotificationStrategy;
use App\Strategy\PushNotificationStrategy;
use App\Strategy\SMSNotificationStrategy;

class NotificationFactory 
{
    public static function createStrategy(string $type): ?NotificationStrategy
    {
        return match (strtolower($type)) {
            'email' => new EmailNotificationStrategy(),
            'sms' => new SMSNotificationStrategy(),
            'push' => new PushNotificationStrategy(),
            default => null,
        };
    }
}