<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface ContactInfoInterface extends ArrayableInterface
{

    public function getContactValue(): string;
    public function getIconUrl(): string;
    public function getActionUrl(): string;
    public function getContactType(): string;
}
