<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{AboutUsInterface, JsonableInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class AboutUsDto implements AboutUsInterface, JsonableInterface
{
    public function __construct(
        #[SerializedName('logo_url')]
        private readonly string $logoUrl,
        private readonly string $description,
    ) {}

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function toArray(): array
    {
        return [
            'logo_url' => $this->logoUrl,
            'description' => $this->description,
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
