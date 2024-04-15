<?php

declare(strict_types=1);

namespace AnotherLibrary\TypeGuard;

use TypeError;

/**
 * @internal
 *
 * @template TVariable
 */
final readonly class TypedArray
{
    /**
     * Create a new TypedArray instance.
     *
     * @param  TVariable  $variable
     */
    public function __construct(private mixed $variable)
    {
    }

    /**
     * Asserts and narrow down the type to array<int>.
     *
     * @phpstan-assert-if-true int[] $this->variable
     *
     * @phpstan-return (TVariable is int[] ? int[] : never)
     */
    public function int(): array
    {
        /** @phpstan-assert non-empty-array<int> $this->variable */
        if (! is_array($this->variable) || $this->variable === []) {
            throw new TypeError('Array must be a non-empty array of specified int.');
        }

        foreach ($this->variable as $item) {
            if (! is_int($item)) {
                throw new TypeError('Array value {'.$item.'} is not [int].');
            }
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to array<string>.
     *
     * @phpstan-assert-if-true string[] $this->variable
     *
     * @phpstan-return (TVariable is string[] ? string[] : never)
     */
    public function string(): array
    {
        /** @phpstan-assert non-empty-array<string> $this->variable */
        if (! is_array($this->variable) || $this->variable === []) {
            throw new TypeError('Array must be a non-empty array of specified string.');
        }

        foreach ($this->variable as $item) {
            if (! is_string($item)) {
                throw new TypeError('Array value {'.$item.'} is not [string].');
            }
        }

        return $this->variable;
    }

    /**
     * Asserts and narrow down the type to the given type.
     *
     * @template TAs
     *
     * @param  class-string<TAs>  $type
     *
     * @phpstan-return TAs[]
     */
    public function class(string $type): array
    {
        /** @phpstan-assert non-empty-array<TAs> $this->variable */
        if (! is_array($this->variable) || $this->variable === []) {
            throw new TypeError('Array must be a non-empty array of specified '.$type.'.');
        }

        foreach ($this->variable as $item) {
            if (! is_object($item) || ! $item instanceof $type) {
                throw new TypeError('Array value {'.$item.'} is not ['.$type.'].');
            }
        }

        return $this->variable;
    }
}
