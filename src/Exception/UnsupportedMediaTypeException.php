<?php

namespace Riot\Exception;

use Exception;

class UnsupportedMediaTypeException extends Exception
{
    protected $message = "Unsupported media type.";
    protected $code = 415;
}