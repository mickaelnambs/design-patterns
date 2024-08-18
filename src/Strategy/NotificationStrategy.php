<?php

namespace App\Strategy;

interface NotificationStrategy
{
    public function send(): void;
}