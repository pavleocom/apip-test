<?php

declare(strict_types=1);

namespace App\Dto;

use DateTimeInterface;

class BookInput
{
    public DateTimeInterface $publishedAt;

    public string $title;
}