<?php

use App\Adapter\LegacyEmailSystemAdapter;
use App\Adapter\LegacyToModernNotificationAdapter;
use App\Adapter\ModernEmailSystemAdapter;
use App\Adapter\ModernNotificationSystemAdapter;
use App\Adapter\ModernSMSSystemAdapter;

require 'vendor/autoload.php';

function sendNotification(ModernNotificationSystemAdapter $notifier, string $recipient, string $message): void
{
    $notifier->send($recipient, $message);
}

function main() {
    // Create an instance of the legacy email system.
    $legacyEmail = new LegacyEmailSystemAdapter();

    // Create the adapter for the legacy system.
    // This allows using the legacy system with the new interface.
    $legacyAdapter = new LegacyToModernNotificationAdapter($legacyEmail);

    // Create instances of the modern systems.
    $modernEmail = new ModernEmailSystemAdapter();
    $modernSMS = new ModernSMSSystemAdapter();

    // Use the legacy system through the adapter.
    // The adapter translates the call from the new interface to the old one
    sendNotification($legacyAdapter, "user1@example.com", "Hello from adapted legacy system");

    // Direct use of modern systems
    // These systems already implement the new interface.
    sendNotification($modernEmail, "user2@example.com", "Hello from modern email system");
    sendNotification($modernSMS, "+1234567890", "Hello from modern SMS system");
}

main();