<?php

namespace Jxckaroo\LaravelServiceRepository\Exceptions\Repositories;

use Exception;
use Throwable;

/**
 * Class InvalidModelException
 * @package Jxckaroo\LaravelServiceRepository\Exceptions\Repositories
 */
class InvalidModelException extends Exception
{
    /**
     * InvalidModelException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Invalid model class", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}