<?php

namespace App\Decorator;

use App\Decorator\AlertNotificationDecorator;
use App\Decorator\LoggingNotificationDecorator;
use App\Strategy\EmailNotificationStrategy;
use App\Strategy\NotificationStrategy;
use App\Strategy\PushNotificationStrategy;
use App\Strategy\SMSNotificationStrategy;

class Notification
{
    public static function createStrategy(string $type, bool $withLogging = false, bool $withAlert = false): ?NotificationStrategy
    {
        $strategy = match (strtolower($type)) {
            'email' => new EmailNotificationStrategy(),
            'sms' => new SMSNotificationStrategy(),
            'push' => new PushNotificationStrategy(),
            default => null,
        };

        if (is_null($strategy)) {
            return null;
        }

        if ($withLogging) {
            $strategy = new LoggingNotificationDecorator($strategy);
        }

        if ($withAlert) {
            $strategy = new AlertNotificationDecorator($strategy);
        }

        return $strategy;
    }
}