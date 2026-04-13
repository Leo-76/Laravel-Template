<?php

namespace VendorName\PackageName\Commands;

use Illuminate\Console\Command;

class PackageCommand extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'package-name:install
                            {--force : Overwrite existing files}';

    /**
     * The console command description.
     */
    protected $description = 'Install the PackageName package';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Installing PackageName...');

        $this->call('vendor:publish', [
            '--tag'   => 'package-name-config',
            '--force' => $this->option('force'),
        ]);

        $this->call('vendor:publish', [
            '--tag'   => 'package-name-migrations',
            '--force' => $this->option('force'),
        ]);

        $this->info('PackageName installed successfully.');

        return self::SUCCESS;
    }
}
