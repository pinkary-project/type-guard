<?php

declare(strict_types=1);

test('array typed int', function (): void {
    $array = [3, 42, 42];

    $intArray = type($array)->asArrayOf()->int();

    expect($intArray)->toBeArray();
    foreach ($intArray as $value) {
        expect($value)->toBeInt();
    }
});

test('not int array', function (): void {
    $variable = [7415541, 'error', 4134];

    type($variable)->asArrayOf()->int();
})->throws(TypeError::class, 'Array value {error} is not [int].');

test('empty array', function (): void {
    $variable = [];

    type($variable)->asArrayOf()->int();
})->throws(TypeError::class, 'Array must be a non-empty array of specified int.');
