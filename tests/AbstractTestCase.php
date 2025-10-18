<?php

namespace Areypurnawan\WhatsappGateway\Tests;

use Orchestra\Testbench\TestCase;
use Areypurnawan\WhatsappGateway\WhatsappGatewayServiceProvider;

abstract class AbstractTestCase extends TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            WhatsappGatewayServiceProvider::class,
        ];
    }

    /**
     * Get package aliases.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'WhatsappApi' => \Areypurnawan\WhatsappGateway\WhatsappGatewayFacade::class,
        ];
    }
}
