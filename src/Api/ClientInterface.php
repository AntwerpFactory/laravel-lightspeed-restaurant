<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

interface ClientInterface
{
    public function get($endpoint, array $data = null);
    public function post($endpoint, array $data = null);
    public function put($endpoint, array $data = null);
    public function patch($endpoint, array $data = null);
    public function delete($endpoint, array $data = null);
}
