<?php

namespace RayBlair\SpaceTradersPHP\Services;

class GameService extends BaseService
{
    /**
     * Return Game Status
     *
     * @return void
     */
    public function status()
    {
        return $this->json($this->client->request('GET', 'game/status'));
    }
}
