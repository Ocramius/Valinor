<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Type\Parser\Exception\Generic;

use CuyZ\Valinor\Type\Parser\Exception\InvalidType;
use CuyZ\Valinor\Type\Type;
use RuntimeException;

use function implode;

final class GenericCommaMissing extends RuntimeException implements InvalidType
{
    /**
     * @param class-string $className
     * @param Type[] $generics
     */
    public function __construct(string $className, array $generics)
    {
        $signature = $className . '<' . implode(', ', $generics) . ', ?>';

        parent::__construct(
            "A comma is missing for the generic `$signature`.",
            1615829484
        );
    }
}
