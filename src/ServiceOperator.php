<?php

namespace RayBlair\SpaceTradersPHP;

use RayBlair\SpaceTradersPHP\Exceptions\InvalidServiceException;
use RayBlair\SpaceTradersPHP\Services\FlightPlanService;
use RayBlair\SpaceTradersPHP\Services\GameService;
use RayBlair\SpaceTradersPHP\Services\LoanService;
use RayBlair\SpaceTradersPHP\Services\LocationService;
use RayBlair\SpaceTradersPHP\Services\ShipService;
use RayBlair\SpaceTradersPHP\Services\SystemService;
use RayBlair\SpaceTradersPHP\Services\UserService;

class ServiceOperator
{
    /**
     * Our Provider
     *
     * @var [type]
     */
    public $provider;

    /**
     * Our Current Service
     *
     * @var [type]
     */
    public $service;

    /**
     * Our Service Mapped to Classes
     */
    public const SERVICE_MAPPING = [
        'game' => GameService::class,
        'flightPlans' => FlightPlanService::class,
        'loans' => LoanService::class,
        'locations' => LocationService::class,
        'orders' => OrderService::class,
        'ships' => ShipService::class,
        'systems' => SystemService::class,
        'users' => UserService::class,
    ];

    /**
     * Our Constructor
     *
     * @param [type] $provider
     * @param [type] $service
     */
    public function __construct($provider, $service)
    {
        $this->provider = $provider;

        if (!array_key_exists($service, static::SERVICE_MAPPING)) {
            throw new InvalidServiceException("The service '{$service}' does not exist.");
        }

        $this->service  = static::SERVICE_MAPPING[$service];
    }

    /**
     * Forward our Method Call to our Service
     *
     * @param [type] $method
     * @param [type] $args
     * @return void
     */
    public function __call($method, $args)
    {
        return (new $this->service($this->provider))->$method(...$args);
    }
}
