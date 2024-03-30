<?php

declare(strict_types=1);

test('boolean type', function (): void {
    $variable = true;

    $value = type($variable)->asBool();

    expect($value)->toBeBool();
});

test('not boolean type', function (): void {
    $variable = 7415541;

    type($variable)->asBool();
})->throws(TypeError::class, 'Variable is not a boolean.');
