<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\NavMenuInterface;
use Walker_Nav_Menu;

final class NavMenuDto implements NavMenuInterface
{
    public function __construct(
        private readonly string $theme_location,
        private readonly ?int $depth = null,
        private readonly bool $echo = false,
        private readonly ?string $container = null,
        private readonly ?string $container_class = null,
        private readonly ?string $container_id = null,
        private readonly ?string $menu_class = null,
        private readonly ?string $fallback_cb = null,
        private readonly ?Walker_Nav_Menu $walker = null,
    ) {}

    public function getThemeLocation(): string
    {
        return $this->theme_location;
    }

    public function getDepth(): ?int
    {
        return $this->depth;
    }

    public function getContainer(): ?string
    {
        return $this->container;
    }

    public function getContainerClass(): ?string
    {
        return $this->container_class;
    }

    public function getContainerId(): ?string
    {
        return $this->container_id;
    }

    public function getMenuClass(): ?string
    {
        return $this->menu_class;
    }

    public function getFallbackCb(): ?string
    {
        return $this->fallback_cb;
    }

    public function getWalker(): ?Walker_Nav_Menu
    {
        return $this->walker;
    }

    public function isEcho(): bool
    {
        return $this->echo;
    }

    public function toArray(): array
    {
        return [
            'theme_location' => $this->theme_location,
            'depth' => $this->depth,
            'container' => $this->container,
            'container_class' => $this->container_class,
            'container_id' => $this->container_id,
            'menu_class' => $this->menu_class,
            'fallback_cb' => $this->fallback_cb,
            'walker' => $this->walker,
        ];
    }
}
