<?php

test('string type', function () {
    $variable = 'string';

    $value = type($variable)->isString();

    expect($value)->toBeString();
});

test('not string type', function () {
    $variable = 1;

    $value = type($variable)->isString();
})->throws(TypeError::class, 'Variable is not a string.');
