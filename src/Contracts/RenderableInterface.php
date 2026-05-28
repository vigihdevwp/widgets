<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface RenderableInterface
{
    public function render(): ?string;
}
