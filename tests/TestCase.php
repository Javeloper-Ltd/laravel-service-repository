<?php

namespace Jxckaroo\LaravelServiceRepository\Tests;

use JXckaroo\LaravelServiceRepository\LaravelServiceRepositoryServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelServiceRepositoryServiceProvider::class,
        ];
    }
}
