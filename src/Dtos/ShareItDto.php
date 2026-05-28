<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{JsonableInterface, ShareItInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ShareItDto implements ShareItInterface, JsonableInterface
{
    public function __construct(
        private readonly string $name,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('share_url')]
        private readonly string $shareUrl,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getShareUrl(): string
    {
        return $this->shareUrl;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'icon_url' => $this->iconUrl,
            'share_url' => $this->shareUrl,
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
