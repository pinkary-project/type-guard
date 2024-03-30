<?php

declare(strict_types=1);

test('positive int', function (): void {
    $variable = 1;

    $value = type($variable)->asPositiveInt();

    expect($value)->toBeInt();
});

test('not integer type', function (): void {
    $variable = 'string';

    type($variable)->asPositiveInt();
})->throws(TypeError::class, 'Variable is not an [integer].');

test('not a positive int', function (int $variable): void {
    type($variable)->asPositiveInt();
})
    ->with([-1, 0])
    ->throws(TypeError::class, 'Variable is not a [positive integer].');
