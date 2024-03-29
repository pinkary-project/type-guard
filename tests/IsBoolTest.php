<?php

test('boolean type', function () {
    $variable = true;

    $value = type($variable)->isBool();

    expect($value)->toBeBool();
});

test('not boolean type', function () {
    $variable = 7415541;

    type($variable)->isBool();
})->throws(TypeError::class, 'Variable is not a boolean.');
