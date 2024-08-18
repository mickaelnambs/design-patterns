<?php

namespace App\Singleton;

class EmailNotifier
{
    public function sendEmail(string $to, string $message): void
    {
        $config = NotificationConfigSingleton::getInstance()->getConfig('email');
        echo "Sending email to {$to} using SMTP host: {$config['host']}\n";
        echo "Message: {$message}\n";
    }
}