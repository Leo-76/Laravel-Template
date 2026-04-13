<?php

namespace VendorName\PackageName\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\PackageName\Providers\PackageServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * Get package providers.
     */
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }

    /**
     * Get package aliases.
     */
    protected function getPackageAliases($app): array
    {
        return [
            'PackageName' => \VendorName\PackageName\Facades\PackageName::class,
        ];
    }

    /**
     * Define environment setup.
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('package-name.enabled', true);
    }
}
