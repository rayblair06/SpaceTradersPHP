<?php

namespace RayBlair\SpaceTradersPHP\Services;

class LocationService extends BaseService
{
    /**
     * Get a locations information by symbol
     *
     * @param string $username
     * @return void
     */
    public function get(string $symbol)
    {
        return $this->json($this->client->request('GET', "game/locations/{$symbol}"));
    }

    /**
     * Get docked ships at a location
     *
     * @param string $symbol
     * @return void
     */
    public function ships(string $symbol)
    {
        return $this->json($this->client->request('GET', "game/locations/{$symbol}/ships"));
    }

    /**
     * Get marketplace at a location
     *
     * @param string $symbol
     * @return void
     */
    public function marketplace(string $symbol)
    {
        return $this->json($this->client->request('GET', "game/locations/{$symbol}/marketplace"));
    }
}
