<?php

namespace RayBlair\SpaceTradersPHP\Services;

class ShipService extends BaseService
{
    /**
     * Show Available Ships
     *
     * @return void
     */
    public function all()
    {
        return $this->json($this->client->request('GET', 'game/ships'));
    }

    /**
     * Get Ship Information
     *
     * @param string $username
     * @param string $ship_id
     * @return void
     */
    public function get(string $username, string $ship_id = null)
    {
        if (!$ship_id) {
            return $this->json($this->client->request('GET', "users/{$username}/ships"));
        }

        return $this->json($this->client->request('GET', "users/{$username}/ships/{$ship_id}"));
    }

    /**
     * Purchase Ship
     *
     * @return void
     */
    public function purchase(string $username, string $location, string $type)
    {
        return $this->json($this->client->request('POST', "users/{$username}/ships", [
            'json' => [
                'location' => $location,
                'type' => $type,
            ]
        ]));
    }

    /**
     * Jettison Ship's Cargo
     *
     * @param string $username
     * @param string $ship_id
     * @param string $good
     * @param integer $quantity
     * @return void
     */
    public function jettison(string $username, string $ship_id, string $good, int $quantity)
    {
        return $this->json($this->client->request('PUT', "users/{$username}/ships/{$ship_id}/jettison", [
            'json' => [
                'good' => $good,
                'quantity' => $quantity,
            ]
        ]));
    }

    public function scrap(string $username, string $ship_id)
    {
        return $this->json($this->client->request('DELETE', "users/{$username}/ships/{$ship_id}"));
    }
}
