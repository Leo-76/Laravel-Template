<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">

    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="text-center">
            <!-- Logo -->
            <svg class="mx-auto h-16 w-16 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
            </svg>

            <h1 class="mt-6 text-4xl font-bold text-gray-900 dark:text-white">
                {{ config('app.name', 'Laravel') }}
            </h1>
            <p class="mt-3 text-lg text-gray-500 dark:text-gray-400">
                Your application is ready. Start building something amazing.
            </p>

            <div class="mt-8 flex items-center justify-center gap-4">
                <a href="https://laravel.com/docs"
                   class="px-5 py-2.5 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition">
                    Documentation
                </a>
                <a href="https://github.com"
                   class="px-5 py-2.5 rounded-lg border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                    GitHub
                </a>
            </div>
        </div>

        <p class="mt-16 text-sm text-gray-400">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} &mdash; PHP v{{ PHP_VERSION }}
        </p>
    </div>

</body>
</html>
