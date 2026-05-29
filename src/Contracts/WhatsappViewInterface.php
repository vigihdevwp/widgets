<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

use VigihdevWP\Widgets\Dtos\WhatsappSendDto;

interface WhatsappViewInterface extends ArrayableInterface
{

    public function getTitle(): string;
    public function getDescription(): string;

    /**
     *
     * @return WhatsappSendDto[]
     */
    public function getItems(): array;
}
