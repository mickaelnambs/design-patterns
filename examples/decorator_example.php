<?php

use App\Decorator\Notification;

require 'vendor/autoload.php';


function main() {
    $notificationType = 'push'; // change to 'sms' or 'push' for different notifications
    $withLogging = true; // Set to true or false
    $withAlert = true; // Set to true or false

    $strategy = Notification::createStrategy($notificationType, $withLogging, $withAlert);
    
    if ($strategy !== null) {
        $strategy->send();
    } else {
        echo "Invalid notification type.\n";
    }
}

main();