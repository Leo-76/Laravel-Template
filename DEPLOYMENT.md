# Deployment Guide

## Requirements

- PHP >= 8.1
- Composer
- Node.js >= 18
- NPM or Yarn

## Production Deployment Steps

### 1. Clone the repository

```bash
git clone https://github.com/your-org/your-repo.git
cd your-repo
```

### 2. Install PHP dependencies

```bash
composer install --no-dev --optimize-autoloader
```

### 3. Install & build JS assets

```bash
npm ci
npm run build
```

### 4. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` with your production values (DB, mail, etc.)

### 5. Run migrations

```bash
php artisan migrate --force
```

### 6. Optimize Laravel

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
```

### 7. Set permissions

```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 8. Queue worker (optional)

```bash
php artisan queue:work --daemon
```

Use Supervisor to keep the worker alive in production.

## Rollback

```bash
php artisan migrate:rollback
git checkout previous-tag
composer install --no-dev --optimize-autoloader
npm ci && npm run build
php artisan config:cache
```

## Zero-downtime deployment

Consider using [Laravel Envoy](https://laravel.com/docs/envoy) or [Deployer](https://deployer.org/) for zero-downtime deployments.
