<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$variable = random_int(0, 1) ? '7415541' : 'not numeric';
assertType('float|int|string', type($variable)->asNumeric());
