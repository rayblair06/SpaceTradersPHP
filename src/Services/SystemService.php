<?php

namespace RayBlair\SpaceTradersPHP\Services;

class SystemService extends BaseService
{
    /**
     * Get Systems
     *
     * @return void
     */
    public function all()
    {
        return $this->json($this->client->request('GET', 'game/systems'));
    }

    /**
     * Show Locations in System
     *
     * @return void
     */
    public function get(string $system, string $type = null)
    {
        return $this->json($this->client->request('GET', "game/systems/{$system}/locations", [
            'query' => [
                'type' => $type,
            ],
        ]));
    }
}
