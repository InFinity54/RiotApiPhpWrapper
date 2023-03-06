<?php

namespace Riot\Exception;

use Exception;

class RateLimitExceededException extends Exception
{
    protected $message = "Rate limit exceeded.";
    protected $code = 429;
}