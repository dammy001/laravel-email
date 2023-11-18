<?php

namespace Tests;

use Damilaredev\LaravelEmail\LaravelEmailServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [LaravelEmailServiceProvider::class];
    }
}
