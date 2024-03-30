<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

final class User
{
}

/**
 * @template TKey
 * @template TValue
 */
final class Collection
{
}

$variable = random_int(0, 1) !== 0 ? null : new User();
assertType(User::class, type($variable)->as(User::class));

/** @var Collection<int, User>|null $variable */
$variable = random_int(0, 1) !== 0 ? null : new Collection();
assertType('Collection<int, User>', type($variable)->as(Collection::class));
