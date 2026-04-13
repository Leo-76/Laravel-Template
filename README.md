# PackageName

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vendor-name/package-name.svg?style=flat-square)](https://packagist.org/packages/vendor-name/package-name)
[![Total Downloads](https://img.shields.io/packagist/dt/vendor-name/package-name.svg?style=flat-square)](https://packagist.org/packages/vendor-name/package-name)
[![License](https://img.shields.io/packagist/l/vendor-name/package-name.svg?style=flat-square)](LICENSE.md)

A short description of your Laravel package.

## Requirements

- PHP ^8.1
- Laravel ^10.0 or ^11.0

## Installation

Install via Composer:

```bash
composer require vendor-name/package-name
```

The package will auto-discover its service provider via Laravel's package auto-discovery.

### Publish the config file (optional)

```bash
php artisan vendor:publish --tag=package-name-config
```

### Publish the migrations (optional)

```bash
php artisan vendor:publish --tag=package-name-migrations
php artisan migrate
```

### Run the installer command (optional)

```bash
php artisan package-name:install
```

## Configuration

After publishing, edit `config/package-name.php`:

```php
return [
    'enabled'    => env('PACKAGE_NAME_ENABLED', true),
    'option_one' => env('PACKAGE_NAME_OPTION_ONE', 'default_value'),
];
```

## Usage

### Via Facade

```php
use VendorName\PackageName\Facades\PackageName;

echo PackageName::hello(); // "Hello from PackageName!"
```

### Via Dependency Injection

```php
use VendorName\PackageName\PackageName;

class MyController extends Controller
{
    public function __construct(protected PackageName $package) {}

    public function index()
    {
        return $this->package->hello();
    }
}
```

### Via Service Container

```php
$package = app('package-name');
echo $package->hello();
```

## Testing

```bash
composer test
```


## Changelog

Please see [CHANGELOG.md](CHANGELOG.md) for information on recent changes.

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.
