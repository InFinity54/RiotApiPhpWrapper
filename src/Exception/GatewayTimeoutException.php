<?php

namespace Riot\Exception;

use Exception;

class GatewayTimeoutException extends Exception
{
    protected $message = "Gateway timeout.";
    protected $code = 504;
}