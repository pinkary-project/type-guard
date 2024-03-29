<?php

test('string type', function () {
    $variable = 'string';

    $value = type($variable)->asString();

    expect($value)->toBeString();
});

test('not string type', function () {
    $variable = 1;

    $value = type($variable)->asString();
})->throws(TypeError::class, 'Variable is not a string.');
