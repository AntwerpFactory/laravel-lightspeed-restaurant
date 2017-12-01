<?php

namespace AntwerpFactory\LightspeedRestaurant\Test\Api;

use AntwerpFactory\LightspeedRestaurant\Test\LightspeedRestaurantTest;

/**
 *  Corresponding Class to test LightspeedRestaurant class
 *
 * @author Pieter Pelgrims
 * @group Api
 *
 */

class AccountingTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->accounting()->endpointbase();
        $this->assertEquals('/PosServer/rest/accounting/', $base);
    }

    public function testGetProductSalesAnalytics()
    {
        $endpoint = $this->api->accounting()->getProductSalesAnalytics('2017-10-22', '2017-11-22');
        $expected = 'PosServer/rest/accounting/analytics/productsales?from=2017-10-22&to=2017-11-22';
        $this->assertEquals($expected, $endpoint);
    }
}
