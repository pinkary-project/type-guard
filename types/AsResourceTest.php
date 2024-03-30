<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$resource = fopen('php://memory', 'r');
$variable = random_int(0, 1) !== 0 ? 'string' : $resource;
assertType('resource', $variable = type($variable)->asResource());
fclose($resource);
