[![Build Status](https://travis-ci.org/AntwerpFactory/laravel-lightspeed-restaurant.svg?branch=master)](https://travis-ci.org/AntwerpFactory/laravel-lightspeed-restaurant)

# Laravel Lightspeed Restaurant

This package makes working with the Lightspeed Restaurant API a breeze. Once installed you can perform all API calls like so:

```php
use Lightspeedresto;

app()->lightspeedresto->core()->getCompanies(); // container

Lightspeedresto::core()->getCompanies(); // or use the facade

Lightspeedresto::core()->getCompany($companyId);

Lightspeedresto::onlineOrdering()->getCustomers();

Lightspeedresto::onlineOrdering()->updateOrderPartial($companyId, $orderId, $data);

Lightspeedresto::inventory()->addProduct($productGroupId, $data);
```

We recommend using [fractals](https://github.com/thephpleague/fractal) to transform the data that gets passed through to the API.

## Installation

Install the package via composer:

```shell
composer require antwerpfactory/laravel-lightspeed-restaurant
```

Unless you're using Laravel 5.5 you need to register the ServiceProvider and Facade:

```php
'providers' => [
    ...
    AntwerpFactory\LightspeedRestaurant\ServiceProvider::class,
];
```

```php
'aliases' => [
	...
    'Lightspeedresto' => AntwerpFactory\LightspeedRestaurant\Facade::class,
    ...
]
```

### Configuration

Publish the configuration with this command:

```shell
php artisan vendor:publish --provider="AntwerpFactory\LightspeedRestaurant\ServiceProvider"
```

This will publish file called `lightspeedrestaurant.php` in your config-directory with this content:
```php
<?php

return [

	/*
    |--------------------------------------------------------------------------
    | User Creditentials
    |--------------------------------------------------------------------------
    */

	'username' => env('LIGHTSPEED_RESTAURANT_USER_NAME'),

	'password' => env('LIGHTSPEED_RESTAURANT_PASSWORD'),

	'companyId' => env('LIGHTSPEED_RESTAURANT_COMPANYID'),

	'server' => env('LIGHTSPEED_RESTAURANT_SERVER'),

	'deviceId' => 'api',

];
```

## Tests

```shell
$ make sniff test
```

## Contributing

Please see [contributing](CONTRIBUTING.md) for details.


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
