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

class FinancialTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->financial()->endpointbase();
        $this->assertEquals('/PosServer/rest/financial', $base);
    }

    public function testGetProductSalesAnalytics()
    {
        $endpoint = $this->api->financial()->getProductSalesAnalytics('2017-10-22', '2017-11-22');
        $expected = 'PosServer/rest/financial/analytics/productsales?from=2017-10-22&to=2017-11-22';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetReceipts()
    {
        $endpoint = $this->api->financial()->getReceipts(
            [
            'from' => '2017-10-22',
            'to'    => '2017-11-22'
            ]
        );
        $expected = 'PosServer/rest/financial/receipt?from=2017-10-22&to=2017-11-22';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetUnprocessedReports()
    {
        $endpoint = $this->api->financial()->getUnprocessedReports();
        $expected = 'PosServer/rest/financial/report/z/unprocessed';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetReport()
    {
        $endpoint = $this->api->financial()->getReport(1);
        $expected = 'PosServer/rest/financial/report/z/1';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetReportStatus()
    {
        $endpoint = $this->api->financial()->getReportStatus(1);
        $expected = 'PosServer/rest/financial/report/z/1/status';
        $this->assertEquals($expected, $endpoint);
    }

    public function testUpdateReportStatus()
    {
        $endpoint = $this->api->financial()->updateReportStatus(1, []);
        $expected = 'PosServer/rest/financial/report/z/1/status';
        $this->assertEquals($expected, $endpoint);
    }
}
