<?php

test('integer type', function () {
    $variable = 7415541;

    $value = type($variable)->asInt();

    expect($value)->toBeInt();
});

test('not integer type', function () {
    $variable = 'string';

    type($variable)->asInt();
})->throws(TypeError::class, 'Variable is not an integer.');
