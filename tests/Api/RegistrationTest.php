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

class RegistrationTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->registration()->endpointbase();
        $this->assertEquals('/PosServer/rest/registration', $base);
    }

    public function testRegisterNewAccount()
    {
        $endpoint = $this->api->registration()->registerNewAccount([]);
        $expected = 'PosServer/rest/registration/register';
        $this->assertEquals($expected, $endpoint);
    }
}
