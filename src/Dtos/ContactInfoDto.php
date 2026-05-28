<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{ContactInfoInterface, JsonableInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ContactInfoDto implements ContactInfoInterface, JsonableInterface
{
    public function __construct(
        #[SerializedName('contact_value')]
        private readonly string $contactValue,
        #[SerializedName('contact_type')]
        private readonly string $contactType,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
    ) {}

    public function getContactValue(): string
    {
        return $this->contactValue;
    }

    public function getContactType(): string
    {
        return $this->contactType;
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
            'contact_value' => $this->contactValue,
            'contact_type' => $this->contactType,
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
