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

class LiteserverTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->liteserver()->endpointbase();
        $this->assertEquals('/PosServer/rest/liteserverConversion', $base);
    }

    public function testConvertReceiptId()
    {
        $endpoint = $this->api->liteserver()->convertReceiptId('foo');
        $expected = 'PosServer/rest/liteserverConversion/receipt/foo';
        $this->assertEquals($expected, $endpoint);
    }
}
