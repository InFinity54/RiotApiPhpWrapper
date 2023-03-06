<?php

namespace Riot\Exception;

use Exception;

class BadGatewayException extends Exception
{
    protected $message = "Bad gateway.";
    protected $code = 502;
}