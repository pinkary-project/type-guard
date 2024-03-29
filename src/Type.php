<?php

declare(strict_types=1);

namespace StdLibrary\TypeGuard;

use TypeError;

/**
 * @internal
 *
 * @template TVariable as mixed
 */
final readonly class Type
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
     * Asserts and narrow down the type to string.
     */
    public function isString(): string
    {
        if (! is_string($this->variable)) {
            throw new TypeError('Variable is not a string.');
        }

        return $this->variable;
    }
}
