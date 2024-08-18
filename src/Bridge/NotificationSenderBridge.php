<?php

namespace App\Bridge;

interface NotificationSenderBridge
{
    public function send(string $recipient, string $message): void;
}