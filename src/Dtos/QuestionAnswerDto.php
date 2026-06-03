<?php

declare(strict_types=1);

namespace VigihdevWP\Widgets\Dtos;

final class QuestionAnswerDto
{
    /**
     * @param string $question
     * @param string[] $answers
     */
    public function __construct(
        public readonly string $question,
        public readonly array $answers,
    ) {}
}
