<?php

namespace Directus\Authentication\Exception;

use Directus\Exception\NotFoundException;

class InvalidUserCredentialsException extends NotFoundException
{
    const ERROR_CODE = 100;

    public function __construct()
    {
        parent::__construct('auth_invalid_credentials', static::ERROR_CODE);
    }
}
