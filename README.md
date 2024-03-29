<p align="center">
    <img src="https://raw.githubusercontent.com/std-library/type-guard/master/docs/example.jpg" height="300" alt="Skeleton Php">
    <p align="center">
        <a href="https://github.com/std-library/type-guard/actions"><img alt="GitHub Workflow Status (master)" src="https://github.com/std-library/type-guard/actions/workflows/tests.yml/badge.svg"></a>
        <a href="https://packagist.org/packages/std-library/type-guard"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/std-library/type-guard"></a>
        <a href="https://packagist.org/packages/std-library/type-guard"><img alt="Latest Version" src="https://img.shields.io/packagist/v/std-library/type-guard"></a>
        <a href="https://packagist.org/packages/std-library/type-guard"><img alt="License" src="https://img.shields.io/packagist/l/std-library/type-guard"></a>
    </p>
</p>

------

> This library is a **work in progress**. Please, do not use it in production.

Type Guard is a lightweight PHP library that allows you to narrow down the type of an variable to a more specific type. It provides a `type` function to assert and tell the compiler, [PHPStan](https://phpstan.org/), and [Psalm](https://psalm.dev/) the type of a variable. Here is an example:

```php
function config(): mixed;

// For PHPStan and Psalm, the return type of config is mixed:
$apiKey = config('api_key'); 

// Asserts and narrow down the type of $apiKey to string:
$apiKey = type($apiKey)->asString(); 
```

## Installation

> **Requires [PHP 8.2+](https://php.net/releases/)**

You may use [Composer](https://getcomposer.org) to install Type Guard into your PHP project:

```bash
composer require std-library/type-guard
```

## Usage

- [`asInt()`](#asint)
- [`asString()`](#asstring)

### `asInt()`

Asserts and narrows down the type of the given variable to an integer.

```php
$variable = type($variable)->asInt();
```

### `asString()`

Asserts and narrows down the type of the given variable to an string.

```php
$variable = type($variable)->asString();
```

------

**Type Guard** was created by **[Nuno Maduro](https://twitter.com/enunomaduro)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
