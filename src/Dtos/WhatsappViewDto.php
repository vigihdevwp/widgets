<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\WhatsappViewInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use VigihdevWP\Widgets\Contracts\JsonableInterface;

final class WhatsappViewDto implements WhatsappViewInterface, JsonableInterface
{


    /**
     * 
     * @param WhatsappViewDto[] $items
     * 
     */
    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly array $items,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'items' => $this->items,
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
