<?php

namespace Jxckaroo\LaravelServiceRepository\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Jxckaroo\LaravelServiceRepository\LaravelServiceRepositoryServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelServiceRepositoryServiceProvider::class,
        ];
    }
}
