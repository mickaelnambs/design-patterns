<?php

namespace App\Prototype;

abstract class NotificationPrototype
{
    protected string $recipient = '';
    protected string $message = '';

    abstract public function send(): void;
    abstract public function clone(): self;

    public function setRecipient($recipient): void
    {
        $this->recipient = $recipient;
    }

    public function setMessage($message): void
    {
        $this->message = $message;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function getMessage(): string 
    {
        return $this->message;
    }
}