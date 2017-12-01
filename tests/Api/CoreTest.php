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

class CoreTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->core()->endpointbase();
        $this->assertEquals('/PosServer/rest/core', $base);
    }

    public function testGetCompanies()
    {
        $endpoint = $this->api->core()->getCompanies();
        $expected = 'PosServer/rest/core/company';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCompany()
    {
        $endpoint = $this->api->core()->getCompany(1);
        $expected = 'PosServer/rest/core/company/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testPatchCompany()
    {
        $endpoint = $this->api->core()->getCompany(1);
        $expected = 'PosServer/rest/core/company/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCustomers()
    {
        $endpoint = $this->api->core()->getCustomers();
        $expected = 'PosServer/rest/core/customer';
        $this->assertEquals($expected, $endpoint);
    }

    public function testCreateCustomer()
    {
        $endpoint = $this->api->core()->createCustomer([]);
        $expected = 'PosServer/rest/core/customer';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCustomer()
    {
        $endpoint = $this->api->core()->getCustomer(1);
        $expected = 'PosServer/rest/core/customer/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testUpdateCustomer()
    {
        $endpoint = $this->api->core()->updateCustomer(1, []);
        $expected = 'PosServer/rest/core/customer/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCustomerCredit()
    {
        $endpoint = $this->api->core()->getCustomerCredit('1');
        $expected = 'PosServer/rest/core/customer/1/credit';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCustomerCreditChanges()
    {
        $endpoint = $this->api->core()->getCustomerCreditChanges('1');
        $expected = 'PosServer/rest/core/customer/1/creditchange';
        $this->assertEquals($expected, $endpoint);
    }

    public function testAddCustomerCreditChanges()
    {
        $endpoint = $this->api->core()->addCustomerCreditChanges('1', []);
        $expected = 'PosServer/rest/core/customer/1/creditchange';
        $this->assertEquals($expected, $endpoint);
    }

    public function testAddLoyaltyCard()
    {
        $endpoint = $this->api->core()->addLoyaltyCard('1', []);
        $expected = 'PosServer/rest/core/customer/1/loyaltycard';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetCompanyEstablishments()
    {
        $endpoint = $this->api->core()->getCompanyEstablishments();
        $expected = 'PosServer/rest/core/establishment';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetFloors()
    {
        $endpoint = $this->api->core()->getFloors();
        $expected = 'PosServer/rest/core/floor';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetFloor()
    {
        $endpoint = $this->api->core()->getFloor('1');
        $expected = 'PosServer/rest/core/floor/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetTablesForFloor()
    {
        $endpoint = $this->api->core()->getTablesForFloor('1', []);
        $expected = 'PosServer/rest/core/floor/1/table';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetReferrals()
    {
        $endpoint = $this->api->core()->getReferrals();
        $expected = 'PosServer/rest/core/referral';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetTables()
    {
        $endpoint = $this->api->core()->getTables();
        $expected = 'PosServer/rest/core/tables';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetTable()
    {
        $endpoint = $this->api->core()->getTable('1');
        $expected = 'PosServer/rest/core/tables/1';
        $this->assertEquals($expected, $endpoint);
    }
}
