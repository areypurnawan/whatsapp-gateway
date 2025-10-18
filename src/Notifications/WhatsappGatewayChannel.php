<?php

namespace Areypurnawan\WhatsappGateway\Notifications;

use Areypurnawan\WhatsappGateway\Notifications\WhatsappGatewayMessage;
use Areypurnawan\WhatsappGateway\WhatsappGateway;
use Illuminate\Notifications\Notification;

class WhatsappGatewayChannel
{
    /** @var Client */
    protected $client;

    /**
     * @param WhatsappGateway $client
     */
    public function __construct(WhatsappGateway $client) {
        $this->client = $client;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed $notifiable
     * @param  \Illuminate\Notifications\Notification $notification
     * @return void
     * @throws \Areypurnawan\WhatsappGateway\Exception\InvalidMethodException
     */
    public function send($notifiable, Notification $notification)
    {
        if (! $mobile = $notifiable->routeNotificationFor('whatsapp_gateway')) {
            return;
        }

        $message = $notification->toWhatsappGateway($notifiable);

        if (is_string($message)) {
            $message = new WhatsappGatewayMessage($message);
        }

        $this->client->sendMessage($mobile,$message->content,$message->params,$message->headers);
    }
}