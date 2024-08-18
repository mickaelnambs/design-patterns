<?php

namespace App\Prototype;

class PushNotificationPrototype extends NotificationPrototype
{
    private string $deviceToken = '';

    public function setDeviceToken($token)
    {
        $this->deviceToken = $token;
    }

    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    public function send(): void
    {
        echo "Sending Push Notification to {$this->getRecipient()} with device: {$this->getDeviceToken()} and message: {$this->getMessage()}\n";
    }

    public function clone(): self
    {
        $clone = new PushNotificationPrototype();
        $clone->setRecipient($this->getRecipient());
        $clone->setMessage($this->getMessage());
        $clone->setDeviceToken($this->getDeviceToken());

        return $clone;
    }
}