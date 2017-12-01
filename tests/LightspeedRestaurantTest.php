<?php

namespace AntwerpFactory\LightspeedRestaurant\Test;

use AntwerpFactory\LightspeedRestaurant\LightspeedRestaurant;
use AntwerpFactory\LightspeedRestaurant\Api\ClientInterface;

/**
 *  Corresponding Class to test LightspeedRestaurant class
 *
 * @author Pieter Pelgrims
 *
 */

class LightspeedRestaurantTest extends \PHPUnit_Framework_TestCase
{
    protected $api;

    public function setUp()
    {
        parent::setUp();

        $client = $this
            ->getMockBuilder(ClientStub::class)
            ->disableOriginalConstructor()
            ->setMethods(['get', 'post', 'put', 'patch', 'delete'])
            ->getMock();

        $client->method('get')
            ->will($this->returnArgument(0));
        $client->method('post')
            ->will($this->returnArgument(0));
        $client->method('put')
            ->will($this->returnArgument(0));
        $client->method('patch')
            ->will($this->returnArgument(0));
        $client->method('delete')
            ->will($this->returnArgument(0));

        $this->assertInstanceOf(ClientInterface::class, $client);
        $this->api = new LightspeedRestaurant($client);
    }

    public function testAccounting()
    {
        $instance = $this->api->accounting();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Accounting::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testCore()
    {
        $instance = $this->api->core();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Core::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testFinancial()
    {
        $instance = $this->api->financial();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Financial::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testInventory()
    {
        $instance = $this->api->inventory();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Inventory::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testLabour()
    {
        $instance = $this->api->labour();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Labour::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testLiteserver()
    {
        $instance = $this->api->liteserver();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Liteserver::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testOnlineOrdering()
    {
        $instance = $this->api->onlineOrdering();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\OnlineOrdering::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testRegistration()
    {
        $instance = $this->api->registration();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Registration::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testReservation()
    {
        $instance = $this->api->reservation();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\Reservation::class;
        $this->assertInstanceOf($class, $instance);
    }

    public function testVersionController()
    {
        $instance = $this->api->versionController();
        $class = \AntwerpFactory\LightspeedRestaurant\Api\VersionController::class;
        $this->assertInstanceOf($class, $instance);
    }
}
