<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface RecentPostInterface extends ArrayableInterface
{

    public function getTitle(): string;
    public function getImageUrl(): string;
    public function getActionUrl(): string;
    public function getAuthor(): string;
    public function getPublishedDate(): string;
    public function getKategori(): string;
    public function getSnippet(): string;
}
