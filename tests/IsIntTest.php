<?php

test('integer type', function () {
    $variable = 7415541;

    $value = type($variable)->isInt();

    expect($value)->toBeInt();
});

test('not integer type', function () {
    $variable = 'string';

    type($variable)->isInt();
})->throws(TypeError::class, 'Variable is not an integer.');
