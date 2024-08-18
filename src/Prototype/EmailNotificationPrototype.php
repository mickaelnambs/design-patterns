<?php

namespace App\Prototype;

class EmailNotificationPrototype extends NotificationPrototype
{
    private string $subject = '';

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function send(): void
    {
        echo "Sending Email to {$this->getRecipient()} with subject: {$this->getSubject()} and message: {$this->getMessage()}\n";
    }

    public function clone(): self
    {
        $clone = new EmailNotificationPrototype();
        $clone->setRecipient($this->getRecipient());
        $clone->setMessage($this->getMessage());
        $clone->setSubject($this->getSubject());
        
        return $clone;
    }
}