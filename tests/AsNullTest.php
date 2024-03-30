<?php

declare(strict_types=1);

test('null type', function (): void {
    $variable = null;

    $value = type($variable)->asNull();

    expect($value)->toBeNull();
});

test('not null', function (): void {
    $variable = [];

    type($variable)->asNull();
})->throws(TypeError::class, 'Variable is not a [null].');
