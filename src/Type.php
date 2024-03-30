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
     * Asserts and narrow down the type to the given type.
     *
     * @template TAs
     *
     * @phpstan-assert-if-true TAs $this->variable
     *
     * @param  class-string<TAs>  $type
     * @return (TVariable is TAs ? TVariable : never)
     */
    public function as(string $type): mixed
    {
        if (! is_object($this->variable) || ! $this->variable instanceof $type) {
            throw new TypeError('Variable is not a ['.$type.'].');
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to string.
     *
     * @phpstan-assert-if-true string $this->variable
     */
    public function asString(): string
    {
        if (! is_string($this->variable)) {
            throw new TypeError('Variable is not a [string].');
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
            throw new TypeError('Variable is not an [integer].');
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
            throw new TypeError('Variable is not a [float].');
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
            throw new TypeError('Variable is not a [boolean].');
        }

        return $this->variable;

    }

    /**
     * Asserts and narrow down the type to null.
     *
     * @phpstan-assert-if-true null $this->variable
     */
    public function asNull(): null
    {
        if (! is_null($this->variable)) {
            throw new TypeError('Variable is not a [null].');
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to a callable.
     *
     * @phpstan-assert-if-true callable $this->variable
     */
    public function asCallable(): callable
    {
        if (! is_callable($this->variable)) {
            throw new TypeError('Variable is not a [callable].');
        }

        return $this->variable;
    }

    /**
     * Creates a not type instance.
     *
     * @return Not<TVariable>
     */
    public function not(): Not
    {
        return new Not($this->variable);
    }
}
