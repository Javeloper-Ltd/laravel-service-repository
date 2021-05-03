<?php

namespace Jxckaroo\LaravelServiceRepository\Services;

use Jxckaroo\LaravelServiceRepository\Exceptions\Services\DuplicateRepositoriesException;
use Jxckaroo\LaravelServiceRepository\Services\Interfaces\IService;

/**
 * Class Service
 * @package Jxckaroo\LaravelServiceRepository\Services
 */
abstract class Service implements IService
{
    /**
     * @var array
     */
    protected $repositories;

    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->resolveRepositories();
    }

    /**
     * @throws DuplicateRepositoriesException
     */
    public function resolveRepositories()
    {
        foreach ($this->repositories as $repo) {
            $stringParts = explode('\\', $repo);
            $string = lcfirst(end($stringParts));

            if (property_exists($this, $string)) {
                throw new DuplicateRepositoriesException("Repository already exists with name $string. Do you have the same repositories defined twice in your \$repositories array?");
            }

            $this->{$string} = resolve($repo);
        }
    }
}
