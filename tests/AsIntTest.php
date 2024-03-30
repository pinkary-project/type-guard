<?php

declare(strict_types=1);

test('integer type', function (): void {
    $variable = 7415541;

    $value = type($variable)->asInt();

    expect($value)->toBeInt();
});

test('not integer type', function (): void {
    $variable = 'string';

    type($variable)->asInt();
})->throws(TypeError::class, 'Variable is not an [integer].');
