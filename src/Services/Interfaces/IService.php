<?php

namespace Jxckaroo\LaravelServiceRepository\Services\Interfaces;

use Jxckaroo\LaravelServiceRepository\Exceptions\Services\DuplicateRepositoriesException;

/**
 * Interface IService
 * @package Jxckaroo\LaravelServiceRepository\Services\Interfaces
 */
interface IService
{
    /**
     * @throws DuplicateRepositoriesException
     */
    public function resolveRepositories();

    /**
     * @return array
     */
    public function getActiveRepositories(): array;
}
