<?php

test('numeric type', function ($variable) {
    $value = type($variable)->asNumeric();

    expect($value)->toBeNumeric();
})->with([
    7415541,
    7415.541,
    "7415541",
    0b01100110,
    0x66,
]);

test('not numeric type', function () {
    $variable = 'string';

    type($variable)->asNumeric();
})->with([
    "",
    "not numeric",
    null,
    []
])->throws(TypeError::class, 'Variable is not a numeric.');
