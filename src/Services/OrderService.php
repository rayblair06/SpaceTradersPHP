<?php

namespace RayBlair\SpaceTradersPHP\Services;

class OrderService extends BaseService
{
    /**
     * Purchase Order
     *
     * @return void
     */
    public function purchase(string $username, string $ship_id, string $good, int $quantity)
    {
        return $this->json($this->client->request('POST', "users/{$username}/purchase-orders", [
            'json' => [
                'shipId' => $ship_id,
                'good' => $good,
                'quantity' => $quantity,
            ]
        ]));
    }

    /**
     * Sell Order
     *
     * @return void
     */
    public function sell(string $username, string $ship_id, string $good, int $quantity)
    {
        return $this->json($this->client->request('POST', "users/{$username}/sell-orders", [
            'json' => [
                'shipId' => $ship_id,
                'good' => $good,
                'quantity' => $quantity,
            ]
        ]));
    }
}
