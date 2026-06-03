<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class ReviewCustomerDto
{

    public function __construct(
        public readonly string $username,
        #[SerializedName('review_text')]
        public readonly string $riviewText,
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
        public readonly string $rating,
    ) {}
}
