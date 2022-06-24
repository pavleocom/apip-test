<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Post;
use App\Dto\BookInput;
use App\Processor\BookProcessor;
use App\Repository\BookRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ApiResource(
    operations: [
        new Post(
            input: BookInput::class, // No exception when this line is commented out
            processor: BookProcessor::class,
        ),
    ],
)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public int $id;

    #[ORM\Column(type: 'datetime')]
    public DateTimeInterface $publishedAt;

    #[ORM\Column(type: 'string', length: 255)]
    public string $title;
}
