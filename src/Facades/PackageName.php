<?php

namespace VendorName\PackageName\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string hello()
 * @method static mixed getConfig(string $key, mixed $default = null)
 *
 * @see \VendorName\PackageName\PackageName
 */
class PackageName extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'package-name';
    }
}
