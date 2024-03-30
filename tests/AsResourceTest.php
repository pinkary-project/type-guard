<?php

declare(strict_types=1);

test('resource type', function (): void {
    $variable = fopen('php://memory', 'r');

    $value = type($variable)->asResource();

    expect($value)->toBeResource();

    fclose($variable);
});

test('not resource', function (): void {
    $variable = [];

    type($variable)->asResource();
})->throws(TypeError::class, 'Variable is not a [resource].');
