<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{BackToTopInterface, JsonableInterface};

final class BackToTopDto implements BackToTopInterface, JsonableInterface
{
    public function __construct() {}

    public function toArray(): array
    {
        return [];
    }

    public function toJson(int $flags = 0): string|false
    {
        return json_encode(
            $this->toArray(),
            JSON_THROW_ON_ERROR | $flags
        );
    }
}
