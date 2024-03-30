<?php

test('float type', function () {
    $variable = 7415.541;

    $value = type($variable)->asFloat();

    expect($value)->toBeFloat();
});

test('not float type', function () {
    $variable = 7415541;

    type($variable)->asFloat();
})->throws(TypeError::class, 'Variable is not a float.');
