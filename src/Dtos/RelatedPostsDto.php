<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

use VigihdevWP\Widgets\Contracts\{JsonableInterface, RelatedPostsInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class RelatedPostsDto implements RelatedPostsInterface, JsonableInterface
{
    public function __construct(
        private readonly string $title,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
        private readonly string $snippet,
        private readonly string $author,
        #[SerializedName('published_date')]
        private readonly string $publishedDate,
        private readonly string $kategori
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPublishedDate(): string
    {
        return $this->publishedDate;
    }

    public function getKategori(): string
    {
        return $this->kategori;
    }

    public function getSnippet(): string
    {
        return $this->snippet;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'image_url' => $this->imageUrl,
            'action_url' => $this->actionUrl,
            'snippet' => $this->snippet,
            'author' => $this->author,
            'published_date' => $this->publishedDate,
            'kategori' => $this->kategori,
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
