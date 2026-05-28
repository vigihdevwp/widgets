<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface BreadcrumbInterface extends ArrayableInterface
{

    public function getLabel(): string;
    public function getTitle(): string;
    public function getUrl(): ?string;
}
