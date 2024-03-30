<?php

declare(strict_types=1);

test('string type', function (): void {
    $variable = 'string';

    $value = type($variable)->asString();

    expect($value)->toBeString();
});

test('not string type', function (): void {
    $variable = 1;

    type($variable)->asString();
})->throws(TypeError::class, 'Variable is not a string.');
