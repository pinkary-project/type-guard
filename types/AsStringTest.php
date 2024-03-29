<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$variable = random_int(0, 1) ? 'string' : 1;
assertType('string', type($variable)->asString());
