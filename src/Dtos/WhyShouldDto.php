<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class WhyShouldDto
{

    /**
     * @param string $imageUrl
     * @param string $title
     * @param string $description
     */
    public function __construct(
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
        public readonly string $title,
        public readonly string $description,
    ) {}
}
