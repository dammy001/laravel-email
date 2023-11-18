<?php

namespace Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Damilaredev\LaravelEmail\LaravelEmailServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [LaravelEmailServiceProvider::class];
    }
}