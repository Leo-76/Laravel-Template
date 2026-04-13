<?php

namespace VendorName\PackageName\Providers;

use Illuminate\Support\ServiceProvider;
use VendorName\PackageName\Commands\PackageCommand;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/package-name.php',
            'package-name'
        );

        // Bind the main class into the container
        $this->app->singleton('package-name', function ($app) {
            return new \VendorName\PackageName\PackageName(
                $app['config']['package-name']
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Publish config
        $this->publishes([
            __DIR__ . '/../../config/package-name.php' => config_path('package-name.php'),
        ], 'package-name-config');

        // Publish migrations
        $this->publishes([
            __DIR__ . '/../../database/migrations/' => database_path('migrations'),
        ], 'package-name-migrations');

        // Publish views
        $this->publishes([
            __DIR__ . '/../../resources/views/' => resource_path('views/vendor/package-name'),
        ], 'package-name-views');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'package-name');

        // Load translations
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'package-name');

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                PackageCommand::class,
            ]);
        }
    }
}
