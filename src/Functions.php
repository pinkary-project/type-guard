<?php

declare(strict_types=1);

use StdLibrary\TypeGuard\Type;

if (! function_exists('type')) {
    /**
     * Create a new type instance.
     *
     * @template TVariable
     *
     * @param  TVariable  $variable
     * @return Type<TVariable>
     */
    function type(mixed $variable): Type
    {
        return new Type($variable);
    }
}
