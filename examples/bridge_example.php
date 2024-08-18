<?php

use App\Bridge\EmailSenderBridge;
use App\Bridge\PushSenderBridge;
use App\Bridge\SMSSenderBridge;
use App\Bridge\SimpleNotificationBridge;
use App\Bridge\PriorityNotificationBridge;

require 'vendor/autoload.php';

function main() {
    $pushSender = new PushSenderBridge();
    $smsSender = new SMSSenderBridge();
    $emailSender = new EmailSenderBridge();

    $pushNotification = new SimpleNotificationBridge($pushSender, "User1", "Hello via Push");
    $pushNotification->send();

    $smsNotification = new SimpleNotificationBridge($smsSender, "User2", "Hello via SMS");
    $smsNotification->send();

    $emailNotification = new SimpleNotificationBridge($emailSender, "user3@example.com", "Hello via Email");
    $emailNotification->send();

    $priorityPushNotification = new PriorityNotificationBridge($pushSender, "User4", "Urgent message via Push", 3);
    $priorityPushNotification->send();

    $priorityEmailNotification = new PriorityNotificationBridge($emailSender, "user5@example.com", "Urgent message via Email", 2);
    $priorityEmailNotification->send();
}

main();