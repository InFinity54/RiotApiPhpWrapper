<?php

namespace Riot\Exception;

use Exception;

class UnauthorizedException extends Exception
{
    protected $message = "Unauthorized.";
    protected $code = 401;
}