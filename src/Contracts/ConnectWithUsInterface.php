<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface ConnectWithUsInterface extends ArrayableInterface
{

    public function getName(): string;
    public function getIconUrl(): string;
    public function getActionUrl(): string;
}
