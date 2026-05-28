<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface JsonableInterface
{
    public function toJson(int $flags = 0): string|false;
}
