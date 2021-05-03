<?php

namespace Jxckaroo\LaravelServiceRepository\Services;

use Jxckaroo\LaravelServiceRepository\Services\Interfaces\ServiceInterface;

/**
 * Class Service
 * @package Jxckaroo\LaravelServiceRepository\Services
 */
abstract class Service implements ServiceInterface
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

    protected function resolveRepositories()
    {
        foreach ($this->repositories as $repo) {
            $stringParts = explode('\\', $repo);
            $string = lcfirst(end($stringParts));
            $this->{$string} = resolve($repo);
        }
    }
}
