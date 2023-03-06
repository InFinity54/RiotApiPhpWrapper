<?php

namespace Riot\Exception;

use Exception;

class BadRequestException extends Exception
{
    protected $message = "Bad request.";
    protected $code = 400;
}