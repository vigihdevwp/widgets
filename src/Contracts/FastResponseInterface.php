<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface FastResponseInterface extends ArrayableInterface
{

    public function getFastValue(): string;
    public function getFastType(): string;
    public function getIconUrl(): string;
    public function getActionUrl(): string;
}
