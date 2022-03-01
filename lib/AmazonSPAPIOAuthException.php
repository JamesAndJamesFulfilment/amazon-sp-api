<?php

namespace JJFulfilment\AmazonSPAPI;

use Exception;
use Throwable;

class AmazonSPAPIOAuthException extends Exception
{
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
