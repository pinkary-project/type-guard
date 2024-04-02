<?php

declare(strict_types=1);

test('iterable type', function (): void {
    $variable = [];

    $value = type($variable)->asIterable();

    expect($value)->toBeIterable();
});

test('not iterable type', function (): void {
    $variable = 1;

    type($variable)->asIterable();
})->throws(TypeError::class, 'Variable is not a [iterable].');
