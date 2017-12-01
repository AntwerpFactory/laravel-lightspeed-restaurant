<?php

namespace AntwerpFactory\LightspeedRestaurant\Test;

use AntwerpFactory\LightspeedRestaurant\Api\ClientInterface;

class ClientStub implements ClientInterface
{
    public function get($endpoint, array $data = null)
    {
        return $endpoint;
    }

    public function post($endpoint, array $data = null)
    {
        return $endpoint;
    }
    
    public function put($endpoint, array $data = null)
    {
        return $endpoint;
    }
    
    public function patch($endpoint, array $data = null)
    {
        return $endpoint;
    }
    
    public function delete($endpoint, array $data = null)
    {
        return $endpoint;
    }
}