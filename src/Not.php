<?php

declare(strict_types=1);

namespace AnotherLibrary\TypeGuard;

use TypeError;

/**
 * @internal
 *
 * @template TVariable
 */
final readonly class Not
{
    /**
     * Create a new type instance.
     *
     * @param  TVariable  $variable
     */
    public function __construct(private mixed $variable)
    {
        //
    }

    /**
     * Asserts and narrow down the type to a non-nullable type.
     *
     * @phpstan-assert-if-true !null $this->variable
     *
     * @return (TVariable is null ? never : TVariable)
     */
    public function null(): mixed
    {
        if ($this->variable === null) {
            throw new TypeError('Variable is [null].');
        }

        return $this->variable;
    }
}
