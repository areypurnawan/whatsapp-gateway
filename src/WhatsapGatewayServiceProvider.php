<?php

namespace Areypurnawan\WhatsapGateway;

use Illuminate\Support\ServiceProvider;
use Areypurnawan\WhatsapGateway\WhatsapGateway;

class WhatsapGatewayServiceProvider extends ServiceProvider
{
    protected $defer = false;
    protected $configName = 'whatsapp-gateway';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/config/' . $this->configName . '.php';
        $this->publishes([
            $configPath => config_path($this->configName . '.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/config/' . $this->configName . '.php';
        $this->mergeConfigFrom($configPath, $this->configName);
        $this->app->bind('whatsappgateway', function () {
            return new WhatsappGateway();
        });
    }
}
