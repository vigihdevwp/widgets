<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{BreadcrumbInterface, JsonableInterface};

final class BreadcrumbDto implements BreadcrumbInterface, JsonableInterface
{
    public function __construct(
        private readonly string $title,
        private readonly string $label,
        private readonly ?string $url,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'label' => $this->label,
            'url' => $this->url,
        ];
    }

    public function toJson(int $flags = 0): string|false
    {
        return json_encode(
            $this->toArray(),
            JSON_THROW_ON_ERROR | $flags
        );
    }
}
