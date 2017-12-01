<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

abstract class Api
{
    protected $client;

    abstract public function endpointbase();

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    protected function endpoint($endpoint)
    {
        return implode('/', array_filter(explode('/', $this->endpointbase() . "/" . $endpoint)));
    }

    protected function query(array $data = null)
    {
        if ($data == null) {
            return null;
        }
        return "?" . http_build_query($data);
    }
}
