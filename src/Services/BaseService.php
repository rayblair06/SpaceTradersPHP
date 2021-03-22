<?php

namespace RayBlair\SpaceTradersPHP\Services;

abstract class BaseService
{
    /**
     * Our HTTP Client
     *
     * @var [type]
     */
    protected $client;

    /**
     * Construct go brrrrrr
     *
     * @param [type] $provider
     */
    public function __construct($provider)
    {
        $this->client = $provider->client;
    }

    /**
     * Convert our Response into a Json Object
     *
     * @param [type] $response
     * @return void
     */
    public function json($response)
    {
        return json_decode($response->getBody()->getContents());
    }
}
