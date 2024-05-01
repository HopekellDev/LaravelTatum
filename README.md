# Laravel Tatum

<p align="center">
    <a href="https://tatumio.github.io/tatum-php/" target="_blank">
        <img src="https://repository-images.githubusercontent.com/364242763/d637cddc-cf10-4992-9058-8339bd3e2239"/>
    </a><br/><br/>
</p>


[![Latest Version](https://img.shields.io/packagist/v/hopekelldev/laravel-tatum.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravel-tatum)
[![Total Downloads](https://img.shields.io/packagist/dt/hopekelldev/laravel-tatum.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/laravel-tatum)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/HopekellDev/LaravelTatum/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/HopekellDev/LaravelTatum/)
[![Requirements](https://img.shields.io/badge/php-%5E8.0-blue.svg?style=flat-square)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-orange.svg?style=flat-square)](https://laravel.com)



## Table of Contents
- [Welcome!](#welcome)
  - [What is Tatum?](#what-is-tatum)
  - [Complete Documentation](#)
- [Getting Started](#getting-started)

## Welcome!

This is Laravel wrapper for Tatum.io API endpoints version `1.0.0` based on API version `4.0`.

### What is Tatum?

Tatum offers a flexible framework to build, run, and scale blockchain apps fast. To learn more about the
Tatum blockchain development framework, visit [our website](https://tatum.io/framework).

The Tatum API features powerful endpoints that simplify a complex blockchain into single API requests. Code for all
supported blockchains using unified API calls.

## Getting Started

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