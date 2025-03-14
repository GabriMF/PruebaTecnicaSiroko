<?php

declare(strict_types=1);

namespace Exceptions;

use Exception;

final class FilmIsRentedException extends Exception
{
    public function __construct() {
        parent::__construct("La película que buscas ya está alquilada");
    }
}