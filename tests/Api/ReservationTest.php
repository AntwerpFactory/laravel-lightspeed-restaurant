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

class ReservationTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->reservation()->endpointbase();
        $this->assertEquals('/PosServer/rest/reservation', $base);
    }

    public function testGetReservations()
    {
        $endpoint = $this->api->reservation()->getReservations(
            [
            'tableId' => 1
            ]
        );
        $expected = 'PosServer/rest/reservation?tableId=1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testCreateReservation()
    {
        $endpoint = $this->api->reservation()->createReservation([]);
        $expected = 'PosServer/rest/reservation';
        $this->assertEquals($expected, $endpoint);
    }

    public function testTablesWithChangedStatus()
    {
        $endpoint = $this->api->reservation()->getTablesWithChangedStatus('2017-11-22');
        $expected = 'PosServer/rest/reservation/changedtable?changedAfter=2017-11-22';
        $this->assertEquals($expected, $endpoint);
    }

    public function testReservationConfiguration()
    {
        $endpoint = $this->api->reservation()->getReservationConfiguration();
        $expected = 'PosServer/rest/reservation/configuration';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetFreeTables()
    {
        $endpoint = $this->api->reservation()->getFreeTables();
        $expected = 'PosServer/rest/reservation/freetable';
        $this->assertEquals($expected, $endpoint);
    }

    public function testCancelReservation()
    {
        $endpoint = $this->api->reservation()->cancelReservation('1');
        $expected = 'PosServer/rest/reservation/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetReservation()
    {
        $endpoint = $this->api->reservation()->getReservation('1');
        $expected = 'PosServer/rest/reservation/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testUpdateReservation()
    {
        $endpoint = $this->api->reservation()->updateReservation('1', []);
        $expected = 'PosServer/rest/reservation/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetReceiptsForReservation()
    {
        $endpoint = $this->api->reservation()->getReceiptsForReservation(
            '1',
            [
            'amount' => 25,
            'offset' => 0
            ]
        );
        $expected = 'PosServer/rest/reservation/1/receipt?amount=25&offset=0';
        $this->assertEquals($expected, $endpoint);
    }
}
