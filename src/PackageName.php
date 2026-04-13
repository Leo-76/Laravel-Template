<?php

namespace VendorName\PackageName;

class PackageName
{
    /**
     * Package configuration.
     */
    protected array $config;

    /**
     * Create a new PackageName instance.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Get a config value.
     */
    public function getConfig(string $key, mixed $default = null): mixed
    {
        return $this->config[$key] ?? $default;
    }

    /**
     * Example method — replace with your own logic.
     */
    public function hello(): string
    {
        return 'Hello from PackageName!';
    }
}
