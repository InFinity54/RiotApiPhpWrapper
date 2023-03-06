<?php

namespace Riot\Exception;

use Exception;

class DataNotFoundException extends Exception
{
    protected $message = "Data not found.";
    protected $code = 404;
}