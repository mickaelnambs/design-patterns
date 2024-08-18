<?php

namespace App\Singleton;

class SMSNotifier
{
    public function sendSMS(string $to, string $message): void
    {
        $config = NotificationConfigSingleton::getInstance()->getConfig('sms');
        echo "Sending SMS to {$to} using API key: {$config['api_key']}\n";
        echo "Message: {$message}\n";
    }
}