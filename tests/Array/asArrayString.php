<?php

declare(strict_types=1);

test('array typed string', function (): void {
    $array = ['test', '42', 'ofads'];

    $stringArray = type($array)
        ->asArrayOf()
        ->string();

    expect($stringArray)->toBeArray();
    foreach ($stringArray as $value) {
        expect($value)->toBeString();
    }
});

test('not string array', function (): void {
    $variable = ['test', 7415541, 4134];

    type($variable)
        ->asArrayOf()
        ->string();
})->throws(TypeError::class, 'Array value {7415541} is not [string].');

test('empty array', function (): void {
    $variable = [];

    type($variable)
        ->asArrayOf()
        ->string();
})->throws(TypeError::class, 'Array must be a non-empty array of specified string.');
