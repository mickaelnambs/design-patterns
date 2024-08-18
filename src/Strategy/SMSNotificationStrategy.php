<?php

namespace App\Strategy;

class SMSNotificationStrategy implements NotificationStrategy
{
    public function send(): void 
    {
        echo "Sending a SMS notification.\n";
    }
}