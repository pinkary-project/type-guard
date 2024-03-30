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

Type Guard module is part of the [PHP's Standard Library](https://github.com/std-library), and allows you to **narrow down the type** of an variable to a more specific type.  Using the `type` function, you can perform specific checks to determine the type of an object and then use that object in a way that is **type-safe** according to the [PHPStan](https://phpstan.org/) and [Psalm](https://psalm.dev/) static analyzers.

Here is an example, where we use the `type` function to narrow down the type of a variable that previously had a `mixed` type:

```php
function config(): mixed;

// At compile time, the type of $apiKey is `mixed`:
$apiKey = config('api_key');

// We instruct the static analyzer that $apiKey is a `string`:
$apiKey = type($apiKey)->asString();
```

## Installation

> **Requires [PHP 8.2+](https://php.net/releases/)**

You may use [Composer](https://getcomposer.org) to install Type Guard into your PHP project:

```bash
composer require std-library/type-guard
```

## Usage

- [`as`](#as)
- [`asInt()`](#asint)
- [`asFloat()`](#asfloat)
- [`asString()`](#asstring)
- [`asBool()`](#asbool)

### `as`

Asserts and narrows down the type of the given variable to a more specific type.

```php
$variable = type($variable)->as(User::class);
```

### `asInt()`

Asserts and narrows down the type of the given variable to an integer.

```php
$variable = type($variable)->asInt();
```

### `asFloat()`

Asserts and narrows down the type of the given variable to a float.

```php
$variable = type($variable)->asFloat();
```

### `asString()`

Asserts and narrows down the type of the given variable to a string.

```php
$variable = type($variable)->asString();
```

### `asBool()`

Asserts and narrows down the type of the given variable to a boolean.

```php
$variable = type($variable)->asBool();
```

------

**Type Guard** is part of the [PHP's Standard Library](https://github.com/std-library) project. It was created by **[Nuno Maduro](https://twitter.com/enunomaduro)** and open-sourced under the **[MIT license](https://opensource.org/licenses/MIT)**.
