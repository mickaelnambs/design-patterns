<?php

namespace App\Strategy;

class PushNotificationStrategy implements NotificationStrategy
{
    public function send(): void 
    {
        echo "Sending a push notification.\n";
    }
}