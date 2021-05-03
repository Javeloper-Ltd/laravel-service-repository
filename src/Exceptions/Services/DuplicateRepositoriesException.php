<?php

namespace Jxckaroo\LaravelServiceRepository\Exceptions\Services;

use Exception;
use Throwable;

/**
 * Class DuplicateRepositoriesException
 * @package Jxckaroo\LaravelServiceRepository\Exceptions\Services
 */
class DuplicateRepositoriesException extends Exception
{
    /**
     * InvalidModelException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "One or more repositories has the same name.", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
