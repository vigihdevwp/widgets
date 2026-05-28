<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface ShareItInterface extends ArrayableInterface
{

    public function getName(): string;
    public function getIconUrl(): string;
    public function getShareUrl(): string;
}
