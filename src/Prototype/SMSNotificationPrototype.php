<?php

namespace App\Prototype;

class SMSNotificationPrototype extends NotificationPrototype
{
    private string $phoneNumber = '';

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function send(): void
    {
        echo "Sending SMS to {$this->getRecipient()} with phone number: {$this->getPhoneNumber()} and message: {$this->getMessage()}\n";
    }

    public function clone(): self
    {
        $clone = new SMSNotificationPrototype();
        $clone->setRecipient($this->getRecipient());
        $clone->setMessage($this->getMessage());
        $clone->setPhoneNumber($this->getPhoneNumber());

        return $clone;
    }
}
