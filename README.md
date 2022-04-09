# Application deployment Guide

## Dependencies

```json
{
    "require": {
        "php": "^7.2.5|^8.0",
        "fideloper/proxy": "^4.4",
        "guzzlehttp/guzzle": "~6.2",
        "laravel/framework": "^6.20.26",
        "laravel/tinker": "^2.5",
        "tzsk/payu": "4.0.1"
    },
    "require-dev": {
        "facade/ignition": "^1.16.15",
        "fakerphp/faker": "^1.9.1",
        "laravel/ui": "^1.0",
        "mockery/mockery": "^1.0",
        "nunomaduro/collision": "^3.0",
        "phpunit/phpunit": "^8.5.8|^9.3.3"
    }
}
```

## How to install dependencies

Before installing php dependencies from composer make sure you have `composer` in your operating system.

**Docs for the composer install:** https://getcomposer.org/

Use following command to install php dependencies
```bash
composer install
```
If any error happens, then watch for the error. If you see extension error like `php-curl` was not found then you need to install those dependentant extensions from the example command:

```bash
sudo apt install php-curl
```

## Install npm packages (optional)

```bash
npm install && npm run dev
```
