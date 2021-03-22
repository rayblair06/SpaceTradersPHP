<?php

namespace RayBlair\SpaceTradersPHP\Services;

class FlightPlanService extends BaseService
{
    /**
     * Get Flight Plans by System
     *
     * @return void
     */
    public function all(string $symbol)
    {
        return $this->client->request('GET', "game/systems/{$symbol}/flight-plans");
    }

    /**
     * Get Flight Plan
     *
     * @return void
     */
    public function get(string $username, string $flight_plan_id)
    {
        return $this->client->request('GET', "users/{$username}/flight-plans/{$flight_plan_id}");
    }

    /**
     * Create Flight Plan
     *
     * @return void
     */
    public function create(string $username, string $ship_id, string $destination)
    {
        return $this->json($this->client->request('POST', "users/{$username}/flight-plans", [
            'json' => [
                'shipId' => $ship_id,
                'destination' => $destination,
            ],
        ]));
    }
}
