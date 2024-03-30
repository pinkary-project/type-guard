<?php

test('boolean type', function () {
    $variable = true;

    $value = type($variable)->asBool();

    expect($value)->toBeBool();
});

test('not boolean type', function () {
    $variable = 7415541;

    type($variable)->asBool();
})->throws(TypeError::class, 'Variable is not a boolean.');
