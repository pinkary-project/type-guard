<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$variable = random_int(0, 1) ? 'string' : true;
assertType('bool', type($variable)->asBool());
