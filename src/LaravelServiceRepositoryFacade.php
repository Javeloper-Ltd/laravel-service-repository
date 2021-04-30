<?php

namespace Jxckaroo\LaravelServiceRepository;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jxckaroo\LaravelServiceRepository\LaravelServiceRepository
 */
class LaravelServiceRepositoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-service-repository';
    }
}
