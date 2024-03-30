<?php

test('array type', function () {
    $variable = [];

    $value = type($variable)->asArray();

    expect($value)->toBeArray();
});

test('not array type', function () {
    $variable = 7415541;

    type($variable)->asArray();
})->throws(TypeError::class, 'Variable is not an array.');
