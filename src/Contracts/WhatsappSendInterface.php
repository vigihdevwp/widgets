<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Contracts;

interface WhatsappSendInterface extends ArrayableInterface
{

    public function getContactNumber(): string;
    public function getUsername(): string;
    public function getImageUrl(): string;
    public function getMessage(): string;
}
