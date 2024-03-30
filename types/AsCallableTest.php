<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$variable = random_int(0, 1) !== 0 ? 'string' : fn () => null;
assertType('callable(): mixed', type($variable)->asCallable());

$variable = random_int(0, 1) !== 0 ? 'string' : fn (): int => 123;
assertType('callable(): int', type($variable)->asCallable());
