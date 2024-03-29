<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/skeleton-php/master/docs/example.jpg" height="300" alt="Skeleton Php">
    <p align="center">
        <a href="https://github.com/nunomaduro/skeleton-php/actions"><img alt="GitHub Workflow Status (master)" src="https://github.com/nunomaduro/skeleton-php/actions/workflows/tests.yml/badge.svg"></a>
        <a href="https://packagist.org/packages/nunomaduro/skeleton-php"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/nunomaduro/skeleton-php"></a>
        <a href="https://packagist.org/packages/nunomaduro/skeleton-php"><img alt="Latest Version" src="https://img.shields.io/packagist/v/nunomaduro/skeleton-php"></a>
        <a href="https://packagist.org/packages/nunomaduro/skeleton-php"><img alt="License" src="https://img.shields.io/packagist/l/nunomaduro/skeleton-php"></a>
    </p>
</p>

------

Type Guard is a lightweight PHP library that allows you to narrow down the type of an variable to a more specific type. It provides a `type` function to assert and tell the compiler, [PHPStan](https://phpstan.org/), and [Psalm](https://psalm.dev/) the type of a variable. Here is an example:

```php
function config(): mixed;

$apiKey = config('api_key'); // $apiKey is mixed

type($apiKey)->isString(); // PHPStan and Psalm will know that $apiKey is a string
```

## Installation

> **Requires [PHP 8.2+](https://php.net/releases/)**

You may use [Composer](https://getcomposer.org) to install Type Guard into your PHP project:

```bash
composer require std-library/type-guard
```

## Usage

### `isString()

Asserts that the given variable is a string.

```php
type($variable)->isString();
```

---

**Type Guard** was created by **[Nuno Maduro](https://twitter.com/enunomaduro)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
