<?php

namespace Riot\Exception;

use Exception;

class InternalServerErrorException extends Exception
{
    protected $message = "Internal server error.";
    protected $code = 500;
}