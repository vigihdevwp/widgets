<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{ConnectWithUsInterface, JsonableInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ConnectWithUsDto implements ConnectWithUsInterface, JsonableInterface
{
    public function __construct(
        private readonly string $name,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
    ) {}

    public function getName(): string
    {
        return $this->name;
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
            'name' => $this->name,
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
