<?php

declare(strict_types=1);

namespace Domain;
class Film
{
    public function __construct(
        private string $title,
        private string $genre,
        private string $director,
        private string $description,
        private bool $isRented,
        private ?int $duration = null,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function isRented(): bool
    {
        return $this->isRented;
    }

    public function setRent($isRented): void
    {
        $this->isRented = $isRented;
    }
}