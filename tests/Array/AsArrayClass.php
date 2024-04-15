<?php

declare(strict_types=1);

final class Test
{
}

test('array typed Test', function (): void {
    $variable = new Test();
    $array = [$variable];

    $userArray = type($array)
        ->asArrayOf()
        ->class(Test::class);

    expect($userArray)->toBeArray();
    foreach ($userArray as $value) {
        expect($value)->toBeInstanceOf(Test::class);
    }
});

test('not Test array', function (): void {
    $variable = new Test();
    $variable = [$variable, 7415541];

    type($variable)
        ->asArrayOf()
        ->class(Test::class);
})->throws(TypeError::class, 'Array value {7415541} is not [Test].');

test('empty array', function (): void {
    $variable = [];

    type($variable)
        ->asArrayOf()
        ->class(Test::class);
})->throws(TypeError::class, 'Array must be a non-empty array of specified Test.');
