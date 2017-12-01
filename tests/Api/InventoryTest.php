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

class InventoryTest extends LightspeedRestaurantTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testEndpointbase()
    {
        $base = $this->api->inventory()->endpointbase();
        $this->assertEquals('/PosServer/rest/inventory', $base);
    }

    public function testGetProducts()
    {
        $endpoint = $this->api->inventory()->getProducts(
            [
            'amount' => '25',
            'offset' => '50'
            ]
        );
        $expected = 'PosServer/rest/inventory/product?amount=25&offset=50';
        $this->assertEquals($expected, $endpoint);
    }

    public function testDeleteProduct()
    {
        $endpoint = $this->api->inventory()->deleteProduct('foo');
        $expected = 'PosServer/rest/inventory/product/foo';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetProduct()
    {
        $endpoint = $this->api->inventory()->getProduct('foo');
        $expected = 'PosServer/rest/inventory/product/foo';
        $this->assertEquals($expected, $endpoint);
    }

    public function testPatchProducts()
    {
        $endpoint = $this->api->inventory()->patchProduct('foo', []);
        $expected = 'PosServer/rest/inventory/product/foo';
        $this->assertEquals($expected, $endpoint);
    }

    public function testUpdateProduct()
    {
        $endpoint = $this->api->inventory()->updateProduct('foo', []);
        $expected = 'PosServer/rest/inventory/product/foo';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetSubproducts()
    {
        $endpoint = $this->api->inventory()->getSubproducts('foo');
        $expected = 'PosServer/rest/inventory/product/foo/subproduct';
        $this->assertEquals($expected, $endpoint);
    }

    public function testDeleteSubproduct()
    {
        $endpoint = $this->api->inventory()->deleteSubproduct('foo', 'bar');
        $expected = 'PosServer/rest/inventory/product/foo/subproduct/bar';
        $this->assertEquals($expected, $endpoint);
    }

    public function testAddSubProduct()
    {
        $endpoint = $this->api->inventory()->addSubProduct('foo', 'bar');
        $expected = 'PosServer/rest/inventory/product/foo/subproduct/bar';
        $this->assertEquals($expected, $endpoint);
    }

    public function testDeleteSubProducts()
    {
        $endpoint = $this->api->inventory()->deleteSubProducts('foo', []);
        $expected = 'PosServer/rest/inventory/product/foo/subproduct';
        $this->assertEquals($expected, $endpoint);
    }

    public function testAddSubProducts()
    {
        $endpoint = $this->api->inventory()->addSubProducts('foo', []);
        $expected = 'PosServer/rest/inventory/product/foo/subproduct';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetProductGroups()
    {
        $endpoint = $this->api->inventory()->getProductGroups(
            [
            'amount' => 25,
            'offset' => 0
            ]
        );
        $expected = 'PosServer/rest/inventory/productgroup?amount=25&offset=0';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetProductGroup()
    {
        $endpoint = $this->api->inventory()->getProductGroup('foo');
        $expected = 'PosServer/rest/inventory/productgroup/foo';
        $this->assertEquals($expected, $endpoint);
    }

    public function testGetProductGroupProducts()
    {
        $endpoint = $this->api->inventory()->getProductGroupProducts(
            'foo',
            [
            'amount' => 25,
            'offset' => 0
            ]
        );
        $expected = 'PosServer/rest/inventory/productgroup/foo/product?amount=25&offset=0';
        $this->assertEquals($expected, $endpoint);
    }

    public function testAddProduct()
    {
        $endpoint = $this->api->inventory()->addProduct('foo', []);
        $expected = 'PosServer/rest/inventory/productgroup/foo/product';
        $this->assertEquals($expected, $endpoint);
    }
}
