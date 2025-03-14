<?php

declare(strict_types=1);

namespace Infrastructure;

use Domain\Film;
use Domain\FilmRepository;

class InMemoryFilmRepository implements FilmRepository
{
    public function getAll(): array
    {
        $goodFather = new Film(
            genre: 'Crime',
            director: 'Francis Ford Coppola',
            description: 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
            title: 'The Godfather',
            isRented: false,
        );

        $theShawshankRedemption = new Film(
            genre: 'Drama',
            director: 'Frank Darabont',
            description: "Two imprisoned",
            duration: 142,
            title: 'The Shawshank Redemption',
            isRented: true,
        );

        $pulpFiction = new Film(
            genre: 'Crime',
            director: 'Quentin Tarantino',
            description: "The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.",
            duration: 154,
            title: 'Pulp Fiction',
            isRented: false,
        );

        $gladiator = new Film(
            genre: 'Action',
            director: 'Ridley Scott',
            description: "A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him",
            duration: 155,
            title: 'Gladiator',
            isRented: true,
        );

        $inMemoryfilmRepository = [$goodFather, $theShawshankRedemption, $pulpFiction, $gladiator];

        return $inMemoryfilmRepository;
    }

    public function byTitle(string $filmTitle): ?Film
    {
        $films = $this->getAll();
        foreach ($films as $film) {
            if ($film->getTitle() === $filmTitle) {
                return $film;
            }
        }
        return null;
    }
}