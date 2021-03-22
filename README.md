# SpacetradersPHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rayblair/SpacetradersPHP.svg?style=flat-square)](https://packagist.org/packages/rayblair/SpacetradersPHP)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rayblair/SpacetradersPHP/Tests?label=tests)](https://github.com/rayblair/SpacetradersPHP/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/rayblair/SpacetradersPHP.svg?style=flat-square)](https://packagist.org/packages/rayblair/SpacetradersPHP)

An API Wrapper for spacetraders.io written in PHP.

## Installation

You can install the package via composer:

```bash
composer require rayblair/spacetradersphp
```

## Usage

```php
    $client = new SpaceTradersPHP('token', 'username');

    // Get Game Status
    return $client->game->status();

    // Create User Token
    return $client->users->token('username');

    // Show User
    return $client->users->get('username');

    // Get All Active Flight Plans
    return $client->flightPlans->all('OE');

    // Get existing Flight Plan
    return $client->flightPlans->get('username', 'flight_plan_id');

    // Create Flight Plan
    return $client->flightPlans->create('username', 'ship_id', 'destination');

    // Get available loans
    return $client->loans->all();

    // Get loans
    return $client->loans->get('username');

    // Takeout loan
    return $client->loans->takeout('username', 'STARTUP');

    // Payoff loan
    return $client->loans->payoff('username', 'loan_id');

    // Get Location
    return $client->locations->get('OE-UC');

    // Get Ships at Location
    return $client->locations->ships('OE-UC');

    // Get Locations in System
    return $client->systems->all();

    // Get Locations in System
    return $client->systems->get('OE');

    // Get Marketplace in Location
    return $client->locations->marketplace('OE-UC');

    // Purchase Order
    return $client->orders->purchase('username', 'ship_id', 'FUEL', 20);

    // Sell Order
    return $client->orders->sell('username', 'ship_id', 'FUEL', 20);

    // Show All Ships
    return $client->ships->all();

    // Show Player's Ships
    return $client->ships->get();

    // Get Ship by ID
    return $client->ships->get('ship_id');

    // Purchase Ship
    return $client->ships->purchase('username', 'OE-PM-TR', 'JW-MK-I');

    // Jettison Ship's Cargo
    return $client->ships->jettison('username', 'ship_id', 'FUEL', 20);

    // Scrap Ship
    return $client->ships->scrap('username', 'ship_id');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Ray Blair](https://github.com/rayblair06)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
