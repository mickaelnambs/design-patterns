<?php

require 'vendor/autoload.php';

use App\Factory\NotificationFactory;

function main() {
    $notificationType = 'email'; // change to 'sms' or 'push' for different notifications
    $strategy = NotificationFactory::createStrategy($notificationType);

    if ($strategy !== null) {
        $strategy->send();
    } else {
        echo "Invalid notification type.\n";
    }
}

main();