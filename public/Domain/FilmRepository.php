<?php

declare(strict_types=1);

namespace Domain;

interface FilmRepository
{
    public function getAll(): array;
    public function byTitle(string $filmTitle): ?Film;
}