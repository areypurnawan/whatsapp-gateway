<?php
namespace Areypurnawan\WhatsappGateway;
use Illuminate\Support\Facades\Facade;

class WhatsappGatewayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'whatsappgateway';
    }
}