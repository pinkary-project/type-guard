<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

/** @var array<int, int>|string $variable */
$variable = random_int(0, 1) !== 0 ? 'string' : [1, 2];
assertType('array<int, int>', type($variable)->asIterable());

$variable = random_int(0, 1) !== 0 ? 'string' : [];
assertType('array{}', type($variable)->asIterable());
