<?php

namespace App\Strategy;

class EmailNotificationStrategy implements NotificationStrategy 
{
    public function send(): void 
    {
        echo "Sending an email notification.\n";
    }
}