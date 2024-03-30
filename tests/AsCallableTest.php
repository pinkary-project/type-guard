<?php

declare(strict_types=1);

test('callable type', function (): void {
    $variable = fn () => null;

    $value = type($variable)->asCallable();

    expect($value)->toBeCallable();
});

test('not callable type', function (): void {
    $variable = 7415541;

    type($variable)->asCallable();
})->throws(TypeError::class, 'Variable is not a [callable].');
