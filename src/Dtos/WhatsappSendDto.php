<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\WhatsappSendInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;
use VigihdevWP\Widgets\Contracts\JsonableInterface;

final class WhatsappSendDto implements WhatsappSendInterface, JsonableInterface
{


    public function __construct(
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        #[SerializedName('contact_number')]
        private readonly string $contactNumber,
        private readonly string $username,
        private readonly string $message,
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getContactNumber(): string
    {
        return $this->contactNumber;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function toArray(): array
    {
        return [
            'image_url' => $this->getImageUrl(),
            'contact_number' => $this->getContactNumber(),
            'username' => $this->getUsername(),
            'message' => $this->getMessage(),
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
