<?php

declare(strict_types=1);

namespace StdLibrary\TypeGuard;

use TypeError;

/**
 * @internal
 *
 * @template TVariable
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
     *
     * @phpstan-assert-if-true string $this->variable
     */
    public function asString(): string
    {
        if (! is_string($this->variable)) {
            throw new TypeError('Variable is not a string.');
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to integer.
     *
     * @phpstan-assert-if-true int $this->variable
     */
    public function asInt(): int
    {
        if (! is_int($this->variable)) {
            throw new TypeError('Variable is not an integer.');
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to float.
     *
     * @phpstan-assert-if-true float $this->variable
     */
    public function asFloat(): float
    {
        if (! is_float($this->variable)) {
            throw new TypeError('Variable is not a float.');
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to boolean.
     *
     * @phpstan-assert-if-true bool $this->variable
     */
    public function asBool(): bool
    {
        if (! is_bool($this->variable)) {
            throw new TypeError('Variable is not a boolean.');
        }

        return $this->variable;

    }
}
