<?php

namespace Iag\Agws\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class IntegrationTestCase extends OrchestraTestCase
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [ 'Iag\Agws\AgwsServiceProvider' ];
    }
}
