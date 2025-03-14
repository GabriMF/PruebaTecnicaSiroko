<?php

declare(strict_types=1);

namespace Exceptions;

use Exception;

final class FilmNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('La película que buscas no existe');
    }

}