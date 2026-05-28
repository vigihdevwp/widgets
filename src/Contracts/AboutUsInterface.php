<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface AboutUsInterface extends ArrayableInterface
{

    public function getLogoUrl(): string;
    public function getDescription(): string;
}
