<?php

use App\Prototype\EmailNotificationPrototype;
use App\Prototype\PushNotificationPrototype;
use App\Prototype\SMSNotificationPrototype;

require 'vendor/autoload.php';

function main() {
    // Create prototype instances.
    $pushPrototype = new PushNotificationPrototype();

    $smsPrototype = new SMSNotificationPrototype();

    $emailPrototype = new EmailNotificationPrototype();

    // Clone and use the prototypes.
    $push1 = $pushPrototype->clone();
    $push1->setRecipient("User1");
    $push1->setMessage("Hello User1");
    $push1->setDeviceToken("user1_device_token");
    $push1->send();

    $sms1 = $smsPrototype->clone();
    $sms1->setRecipient("User2");
    $sms1->setMessage("Hello User2");
    $sms1->setPhoneNumber("1234567890");
    $sms1->send();

    $email1 = $emailPrototype->clone();
    $email1->setRecipient("user3@example.com");
    $email1->setSubject("Welcome");
    $email1->setMessage("Hello User3");
    $email1->send();
}

main();