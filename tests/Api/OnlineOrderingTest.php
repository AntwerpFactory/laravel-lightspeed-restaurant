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

class OnlineOrderingTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->onlineOrdering()->endpointbase();
        $this->assertEquals('/PosServer/rest/onlineordering', $base);
    }

    public function testGetCustomers()
    {
        $endpoint = $this->api->onlineOrdering()->getCustomers(
            [
            'email' => 'foo@example.org'
            ]
        );
        $expected = 'PosServer/rest/onlineordering/customer?email=foo%40example.org';
        $this->assertEquals($expected, $endpoint);
    }

    public function testCreateCustomer()
    {
        $endpoint = $this->api->onlineOrdering()->createCustomer([]);
        $expected = 'PosServer/rest/onlineordering/customer';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCustomer()
    {
        $endpoint = $this->api->onlineOrdering()->getCustomer('1');
        $expected = 'PosServer/rest/onlineordering/customer/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testUpdateCustomer()
    {
        $endpoint = $this->api->onlineOrdering()->updateCustomer('1', []);
        $expected = 'PosServer/rest/onlineordering/customer/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testCreateOrderForCustomerInEstablishment()
    {
        $endpoint = $this->api->onlineOrdering()
            ->createOrderForCustomerInEstablishment('1', []);
        $expected = 'PosServer/rest/onlineordering/customer/1/establishmentorder';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetOrdersForCustomer()
    {
        $endpoint = $this->api->onlineOrdering()->getOrdersForCustomer(
            '1',
            [
            'amount' => 25,
            'offset' => 0
            ]
        );
        $expected = 'PosServer/rest/onlineordering/customer/1/order?amount=25&offset=0';
        $this->assertEquals($expected, $endpoint);
    }

    public function testCreateOrderForCustomer()
    {
        $endpoint = $this->api->onlineOrdering()
            ->createOrderForCustomer('1', []);
        $expected = 'PosServer/rest/onlineordering/customer/1/order';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetOrderForCustomer()
    {
        $endpoint = $this->api->onlineOrdering()
            ->getOrderForCustomer('foo', 'bar');
        $expected = 'PosServer/rest/onlineordering/customer/foo/order/bar';
        $this->assertEquals($expected, $endpoint);
    }

    public function testUpdateOrderPartial()
    {
        $endpoint = $this->api->onlineOrdering()
            ->updateOrderPartial('foo', 'bar', []);
        $expected = 'PosServer/rest/onlineordering/customer/foo/order/bar';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetFeatures()
    {
        $endpoint = $this->api->onlineOrdering()->getFeatures();
        $expected = 'PosServer/rest/onlineordering/feature';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetOrders()
    {
        $endpoint = $this->api->onlineOrdering()->getOrders(
            [
            'status' => 'ACCEPTED'
            ]
        );
        $expected = 'PosServer/rest/onlineordering/order?status=ACCEPTED';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetPaymentTypes()
    {
        $endpoint = $this->api->onlineOrdering()->getPaymentTypes();
        $expected = 'PosServer/rest/onlineordering/paymenttype';
        $this->assertEquals($expected, $endpoint);
    }

    public function testTaxClasses()
    {
        $endpoint = $this->api->onlineOrdering()->getTaxClasses();
        $expected = 'PosServer/rest/onlineordering/taxclass';
        $this->assertEquals($expected, $endpoint);
    }
}
