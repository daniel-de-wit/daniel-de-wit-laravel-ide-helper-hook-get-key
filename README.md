# Laravel IDE Helper Hook GetKey

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/daniel-de-wit/laravel-ide-helper-hook-get-key/run-tests?label=tests)](https://github.com/daniel-de-wit/laravel-ide-helper-hook-get-key/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Coverage Status](https://coveralls.io/repos/github/daniel-de-wit/laravel-ide-helper-hook-get-key/badge.svg?branch=main)](https://coveralls.io/github/daniel-de-wit/laravel-ide-helper-hook-get-key?branch=main)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniel-de-wit/laravel-ide-helper-hook-get-key.svg?style=flat-square)](https://packagist.org/packages/daniel-de-wit/laravel-ide-helper-hook-get-key)
[![Total Downloads](https://img.shields.io/packagist/dt/daniel-de-wit/laravel-ide-helper-hook-get-key.svg?style=flat-square)](https://packagist.org/packages/daniel-de-wit/laravel-ide-helper-hook-get-key)

A Laravel Package for adding Eloquent GetKey type support to Laravel IDE Helper [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper).

## Installation

You can install the package via composer:

```bash
composer require --dev daniel-de-wit/laravel-ide-helper-hook-get-key
```

The GetKey Hook is loaded using [Package Discovery](https://laravel.com/docs/8.x/packages#package-discovery), when disabled read [Manual Installation](#manual-installation).

## Usage

Run standard model generation commands as normal:

`php artisan ide-helper:models "App\Models\Post"`

Docblocks will be added to the model

```php
 * @method static null|string getKey()
```

## Manual Installation
When disabled, register the LaravelIdeHelperHookGetKeyServiceProvider manually by adding it to your config/app.php
```php
/*
 * Package Service Providers...
 */
 DanielDeWit\LaravelIdeHelperHookGetKey\Providers\LaravelIdeHelperHookGetKeyServiceProvider::class,
```

## Testing

```bash
composer test
```

## Credits

- [Daniel de Wit](https://github.com/daniel-de-wit)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
