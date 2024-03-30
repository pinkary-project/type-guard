<?php

declare(strict_types=1);

test('array type', function (): void {
    $variable = [];

    $value = type($variable)->asArray();

    expect($value)->toBeArray();
});

test('not array type', function (): void {
    $variable = 7415541;

    type($variable)->asArray();
})->throws(TypeError::class, 'Variable is not an array.');
