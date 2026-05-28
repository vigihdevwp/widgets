<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{FastResponseInterface, JsonableInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class FastResponseDto implements FastResponseInterface, JsonableInterface
{
    public function __construct(
        #[SerializedName('fast_value')]
        private readonly string $fastValue,
        #[SerializedName('fast_type')]
        private readonly string $fastType,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
    ) {}

    public function getFastValue(): string
    {
        return $this->fastValue;
    }

    public function getFastType(): string
    {
        return $this->fastType;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }

    public function toArray(): array
    {
        return [
            'fast_value' => $this->fastValue,
            'fast_type' => $this->fastType,
            'icon_url' => $this->iconUrl,
            'action_url' => $this->actionUrl,
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
