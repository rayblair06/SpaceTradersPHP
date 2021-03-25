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

## Example

```php
    // Include composer autoload, if required
    require __DIR__ . 'vendor/autoload.php';

    // Import the SpaceTradersPHP class
    use RayBlair\SpaceTradersPHP\SpaceTradersPHP;

    // Initial a client instance
    $client = new SpaceTradersPHP('token', 'username');

    // Will return the game status
    echo $client->game->status()->status;

    // kill php script
    die();
```

## Usage

```php
    // Include composer autoload, if required
    require 'vendor/autoload.php';

    // Import the SpaceTradersPHP class
    use RayBlair\SpaceTradersPHP\SpaceTradersPHP;

    // Initial a client instance
    $client = new SpaceTradersPHP('token', 'username');

    // Get Game Status
    $client->game->status();

    // Create User Token
    $client->users->token('username');

    // Show User
    $client->users->get('username');

    // Get All Active Flight Plans
    $client->flightPlans->all('OE');

    // Get existing Flight Plan
    $client->flightPlans->get('username', 'flight_plan_id');

    // Create Flight Plan
    $client->flightPlans->create('username', 'ship_id', 'destination');

    // Get available loans
    $client->loans->all();

    // Get loans
    $client->loans->get('username');

    // Takeout loan
    $client->loans->takeout('username', 'STARTUP');

    // Payoff loan
    $client->loans->payoff('username', 'loan_id');

    // Get Location
    $client->locations->get('OE-UC');

    // Get Ships at Location
    $client->locations->ships('OE-UC');

    // Get Locations in System
    $client->systems->all();

    // Get Locations in System
    $client->systems->get('OE');

    // Get Marketplace in Location
    $client->locations->marketplace('OE-UC');

    // Purchase Order
    $client->orders->purchase('username', 'ship_id', 'FUEL', 20);

    // Sell Order
    $client->orders->sell('username', 'ship_id', 'FUEL', 20);

    // Show All Ships
    $client->ships->all();

    // Show Player's Ships
    $client->ships->get();

    // Get Ship by ID
    $client->ships->get('ship_id');

    // Purchase Ship
    $client->ships->purchase('username', 'OE-PM-TR', 'JW-MK-I');

    // Jettison Ship's Cargo
    $client->ships->jettison('username', 'ship_id', 'FUEL', 20);

    // Scrap Ship
    $client->ships->scrap('username', 'ship_id');
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
