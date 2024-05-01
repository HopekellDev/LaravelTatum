# Laravel Tatum

[![Latest Version](https://img.shields.io/packagist/v/hopekelldev/laravel-tatum.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravel-tatum)
[![Total Downloads](https://img.shields.io/packagist/dt/hopekelldev/laravel-tatum.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravel-tatum)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/HopekellDev/LaravelTatum/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/HopekellDev/LaravelTatum/)
[![Requirements](https://img.shields.io/badge/php-%5E8.0-blue.svg?style=flat-square)](https://php.net)

A Laravel package for interacting with Tatum.io API endpoints.

## Installation

You can install the package via Composer:

```bash
composer require hopekelldev/laravel-tatum
```
The package will automatically register its service provider and facade.

You'll need to add the service provider to your config/app.php file:
```bash
'providers' => [
    // Other Service Providers
    HopekellDev\LaravelTatum\TatumServiceProvider::class,
],
```
Add alias too:
```bash
'aliases' => [
    // Other Aliases
    'Tatum' => HopekellDev\LaravelTatum\Facades\Tatum::class,
],
```
You can also publish the configuration file if you want to customize it:
```bash
php artisan vendor:publish --provider="HopekellDev\LaravelTatum\TatumServiceProvider" --tag="config"
```
You'll need to add your Tatum.io API credentials to your .env file:
```bash
TATUM_API_KEY=your-api-key
TATUM_ACCOUNT_ID=your-account-id
```
##Testing
```bash
use Tatum;

// Example usage
$balance = Tatum::getAccountBalance();
```