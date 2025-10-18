<?php

/*
 * Add helper function
 */

if (!function_exists('whatsappgateway')) {

    /**
     * @param string $to
     * @param string $message
     * @param array $extra_params
     * @param array $headers
     * @return mixed
     */
    function whatsappgateway($to = null, $message = null, $extra_params = null, $headers = [])
    {
        $whatsappgateway = app('whatsappgateway');
        if (!(is_null($to) || is_null($message))) {
            return $whatsappgateway->sendMessage($to, $message, $extra_params, $headers);
        }
        return $whatsappgateway;
    }
}