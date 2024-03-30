<?php

declare(strict_types=1);

test('not null type', function (): void {
    $variable = 7415541;

    $variable = type($variable)->not()->null();

    expect($variable)->toBeInt();
});

test('null type', function (): void {
    $variable = null;

    type($variable)->not()->null();
})->throws(TypeError::class, 'Variable is [null].');
