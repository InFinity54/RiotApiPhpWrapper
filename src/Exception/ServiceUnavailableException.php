<?php

namespace Riot\Exception;

use Exception;

class ServiceUnavailableException extends Exception
{
    protected $message = "Service unavailable.";
    protected $code = 503;
}