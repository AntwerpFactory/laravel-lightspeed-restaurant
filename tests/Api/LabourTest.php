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

class LabourTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->labour()->endpointbase();
        $this->assertEquals('/PosServer/rest/labour', $base);
    }

    public function testGetClockTimes()
    {
        $endpoint = $this->api->labour()->getClockTimes(
            'foo',
            [
            'amount' => '25',
            'offset' => '50'
            ]
        );
        $expected = 'PosServer/rest/labour/clocktime/foo?amount=25&offset=50';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetEmployees()
    {
        $endpoint = $this->api->labour()->getEmployees(
            '',
            [
            'amount' => '25',
            'offset' => '50'
            ]
        );
        $expected = 'PosServer/rest/labour/employee?amount=25&offset=50';
        $this->assertEquals($expected, $endpoint);
    }
}
