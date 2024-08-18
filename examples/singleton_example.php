<?php

use App\Singleton\EmailNotifier;
use App\Singleton\NotificationConfigSingleton;
use App\Singleton\SMSNotifier;

require 'vendor/autoload.php';

function main() {
    // Use the Singleton to access the configuration.
    $configInstance = NotificationConfigSingleton::getInstance();
    
    // Display the initial email configuration.
    $emailConfig = $configInstance->getConfig('email');
    echo "Initial Email Config - Host: " . $emailConfig['host'] . "\n";

    // Modify the configuration.
    $configInstance->setConfig('email', [
        'host' => 'new-smtp.example.com',
        'port' => 465,
        'username' => 'newuser@example.com',
        'password' => 'newpassword123'
    ]);

    // Display the updated email configuration.
    $updatedEmailConfig = $configInstance->getConfig('email');
    echo "Updated Email Config - Host: " . $updatedEmailConfig['host'] . "\n";

    // Use the notifiers.
    $emailNotifier = new EmailNotifier();
    $smsNotifier = new SMSNotifier();

    $emailNotifier->sendEmail("user@example.com", "Hello via Email");
    $smsNotifier->sendSMS("+1234567890", "Hello via SMS");

    // Demonstrate that it is still the same instance.
    $anotherConfigInstance = NotificationConfigSingleton::getInstance();
    $emailConfigAgain = $anotherConfigInstance->getConfig('email');
    echo "Email Config from another instance - Host: " . $emailConfigAgain['host'] . "\n";
}

main();