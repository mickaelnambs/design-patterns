<?php

namespace App\Singleton;

class NotificationConfigSingleton
{
    private static ?NotificationConfigSingleton $instance = null;
    private array $config;

    private function __construct()
    {
        // Init configuration.
        $this->config = [
            'email' => [
                'host' => 'smtp.example.com',
                'port' => 587,
                'username' => 'user@example.com',
                'password' => 'password123'
            ],
            'sms' => [
                'api_key' => 'your_api_key_here',
                'sender_id' => 'YourApp'
            ],
            'push' => [
                'app_id' => 'your_app_id',
                'api_key' => 'your_push_api_key'
            ]
        ];
    }

    public static function getInstance(): NotificationConfigSingleton
    {
        if (self::$instance === null) {
            self::$instance = new NotificationConfigSingleton();
        }
        return self::$instance;
    }

    public function getConfig(string $type): ?array
    {
        return $this->config[$type] ?? null;
    }

    public function setConfig(string $type, array $config): void
    {
        $this->config[$type] = $config;
    }

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }
}