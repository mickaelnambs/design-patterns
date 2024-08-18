<?php

require 'vendor/autoload.php';

use App\Builder\NotificationBuilder;

function main() {
    // Create a builder for an Email notification with logging and alert.
    $notificationBuilder = (new NotificationBuilder())
        ->setType('email') // email or sms or push
        ->enableLogging() // true or false
        ->enableAlert(); // true or false

    $notification = $notificationBuilder->build();

    if ($notification !== null) {
        $notification->send();
    } else {
        echo "Invalid notification type.\n";
    }
}

main();