<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class TermsConditionsDto
{

    /**
     * @param string $title
     * @param string[] $items
     */
    public function __construct(
        public readonly string $title,
        public readonly array $items,
    ) {}
}
