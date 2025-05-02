<?php

namespace Intermax\Netbox\Tests;

use Intermax\Netbox\NetboxServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            NetboxServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app) {}
}
