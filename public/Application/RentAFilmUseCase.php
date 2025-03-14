<?php

declare(strict_types=1);

namespace Application;

use Domain\Film;
use Domain\FilmRepository;
use Exception;
use Exceptions\FilmIsRentedException;
use Exceptions\FilmNotFoundException;

final readonly class RentAFilmUseCase
{
    public function __construct(private FilmRepository $filmRepository)
    {
    }

    /** @throws Exception */
    public function rentAFilm(string $filmTitle): void
    {
        $film = $this->filmRepository->byTitle($filmTitle);

        $this->assertThatFilmExists($film);
        $this->assertThatFilmIsNotRented($film);

        $film->setRent(true);
    }

    /**
     * @throws FilmNotFoundException
     */
    private function assertThatFilmExists(?Film $film): void
    {
        if (null === $film) {
            throw new FilmNotFoundException();
        }
    }

    /**
     * @throws FilmIsRentedException
     */
    private function assertThatFilmIsNotRented(Film $film): void
    {
        if ($film->isRented()) {
            throw new FilmIsRentedException();
        }
    }
}