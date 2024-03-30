<?php

declare(strict_types=1);

final class User
{
}

test('object type', function (): void {
    $variable = new User;

    $value = type($variable)->as(User::class);

    expect($value)->toBe($variable);
});

test('not string type', function (): void {
    $variable = null;

    type($variable)->as(User::class);
})->throws(TypeError::class, 'Variable is not a [User].');
