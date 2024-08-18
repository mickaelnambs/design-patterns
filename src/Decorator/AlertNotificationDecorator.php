<?php

namespace App\Decorator;

class AlertNotificationDecorator extends NotificationDecorator 
{
    public function send(): void 
    {
        $this->notification->send();
        echo "Sending an alert for the notification.\n";
    }
}