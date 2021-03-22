<?php

namespace RayBlair\SpaceTradersPHP;

use GuzzleHttp\Client;

class SpaceTradersPHP
{
    /**
     * Our Api Key
     *
     * @var string
     */
    public $api_key;

    /**
     * Our Players Username
     *
     * @var string
     */
    public $username;

    /**
     * Our HTTP Client
     *
     * @var [type]
     */
    public $client;

    /**
     * Build our Provider Clients
     *
     * @param string $provider
     */
    public function __construct(string $api_key = null, string $username = null)
    {
        $this->api_key  = $api_key;
        $this->username = $username;

        // Define our Default Headers
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        // Set our Bearer Token if set
        if (isset($api_key)) {
            $headers['Authorization'] = 'Bearer ' . $api_key;
        }

        $this->client = new Client([
            'base_uri' => 'https://api.spacetraders.io',
            'headers' => $headers,
        ]);
    }

    /**
     * Pass our Service name to our ServiceOperator pass to initialise
     *
     * @param [type] $name
     * @return void
     */
    public function __get($name)
    {
        return (new ServiceOperator($this, $name));
    }
}
