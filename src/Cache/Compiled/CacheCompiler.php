<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Cache\Compiled;

interface CacheCompiler
{
    /**
     * @param mixed $value
     */
    public function compile($value): string;
}
