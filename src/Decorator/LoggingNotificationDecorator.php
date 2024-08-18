<?php

namespace App\Decorator;

class LoggingNotificationDecorator extends NotificationDecorator 
{
    public function send(): void 
    {
        $this->notification->send();
        echo "Logging notification details.\n";
    }
}