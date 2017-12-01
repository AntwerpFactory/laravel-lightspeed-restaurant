<?php

namespace AntwerpFactory\LightspeedRestaurant\Test;

use AntwerpFactory\LightspeedRestaurant\Test\LightspeedRestaurantTest;

/**
 *  Corresponding Class to test LightspeedRestaurant class
 *
 * @author Pieter Pelgrims
 * @group Api
 *
 */

class VersionControllerTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->versionController()->endpointbase();
        $this->assertEquals('/PosServer', $base);
    }

    public function testGetReservations()
    {
        $endpoint = $this->api->versionController()->getInfo();
        $expected = 'PosServer/info';
        $this->assertEquals($expected, $endpoint);
    }
}
