<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

use Walker_Nav_Menu;

interface NavMenuInterface extends ArrayableInterface
{
    public function getThemeLocation(): string;
    public function getDepth(): ?int;
    public function isEcho(): bool;
    public function getContainer(): ?string;
    public function getContainerClass(): ?string;
    public function getContainerId(): ?string;
    public function getMenuClass(): ?string;
    public function getFallbackCb(): ?string;
    public function getWalker(): ?Walker_Nav_Menu;
}
