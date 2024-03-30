<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

final class User
{
}

$variable = random_int(0, 1) !== 0 ? null : new User();
assertType(User::class, type($variable)->as(User::class));
