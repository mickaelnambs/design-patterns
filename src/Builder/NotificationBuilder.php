<?php

namespace App\Builder;

use App\Decorator\LoggingNotificationDecorator;
use App\Decorator\AlertNotificationDecorator;
use App\Factory\NotificationFactory;
use App\Strategy\NotificationStrategy;

class NotificationBuilder
{
    private string $type;
    private bool $withLogging = false;
    private bool $withAlert = false;

    public function setType(string $type): self
    {
        $this->type = $type;
        
        return $this;
    }

    public function enableLogging(bool $enable = true): self
    {
        $this->withLogging = $enable;

        return $this;
    }

    public function enableAlert(bool $enable = true): self
    {
        $this->withAlert = $enable;

        return $this;
    }

    public function build(): ?NotificationStrategy
    {
        $strategy = NotificationFactory::createStrategy($this->type);

        if ($strategy === null) {
            return null;
        }

        if ($this->withLogging) {
            $strategy = new LoggingNotificationDecorator($strategy);
        }

        if ($this->withAlert) {
            $strategy = new AlertNotificationDecorator($strategy);
        }

        return $strategy;
    }
}