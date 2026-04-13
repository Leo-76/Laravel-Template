<?php

namespace VendorName\PackageName\Tests\Unit;

use VendorName\PackageName\PackageName;
use VendorName\PackageName\Tests\TestCase;

class PackageNameTest extends TestCase
{
    public function test_hello_returns_string(): void
    {
        $package = new PackageName();
        $this->assertIsString($package->hello());
    }

    public function test_get_config_returns_default_when_missing(): void
    {
        $package = new PackageName([]);
        $this->assertNull($package->getConfig('nonexistent'));
        $this->assertSame('fallback', $package->getConfig('nonexistent', 'fallback'));
    }

    public function test_service_provider_registers_singleton(): void
    {
        $this->assertInstanceOf(PackageName::class, app('package-name'));
        $this->assertSame(app('package-name'), app('package-name'));
    }
}
