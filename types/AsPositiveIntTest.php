<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$variable = random_int(0, 1) !== 0 ? 'string' : 1;
assertType('int<1, max>', $x = type($variable)->asPositiveInt());
