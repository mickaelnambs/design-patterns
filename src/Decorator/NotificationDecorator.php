<?php

namespace App\Decorator;

use App\Strategy\NotificationStrategy;

abstract class NotificationDecorator implements NotificationStrategy
{
    public function __construct(
        protected NotificationStrategy $notification
    ) {}

    abstract public function send(): void;
}