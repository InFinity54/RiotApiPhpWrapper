<?php

namespace Riot\Exception;

use Exception;

class MethodNotAllowedException extends Exception
{
    protected $message = "Method not allowed.";
    protected $code = 405;
}