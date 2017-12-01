<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class ClientApi implements ClientInterface
{
    protected $client;
    protected $config;
    protected $server;
    protected $token;

    public function __construct(array $config)
    {
        $this->server = $config['server'];
        
        unset($config['server']);
        
        $this->config = $config;

        $this->client = new Client(
            [
                'base_uri' => $this->server,
                'defaults' => [
                    'headers'  => [
                        'content-type' => 'application/json',
                        'Accept'       => 'application/json'
                    ]
                ]
            ]
        );

        $this->getToken();
    }

    public function getToken()
    {
        $response = $this->client->request(
            'POST',
            '/PosServer/rest/token',
            [
                'json' => $this->config
            ]
        );
        $this->token = json_decode($response->getBody()->getContents())->token;
    }

    public function get($endpoint, array $data = null)
    {
        return $this->request('GET', $endpoint, $data);
    }

    public function post($endpoint, array $data = null)
    {
        return $this->request('POST', $endpoint, $data);
    }

    public function put($endpoint, array $data = null)
    {
        return $this->request('PUT', $endpoint, $data);
    }

    public function patch($endpoint, array $data = null)
    {
        return $this->request('PATCH', $endpoint, $data);
    }

    public function delete($endpoint, array $data = null)
    {
        return $this->request('DELETE', $endpoint, $data);
    }

    public function request(string $method, string $endpoint, array $data = null)
    {
        $response = $this->client->request(
            $method,
            $endpoint,
            [
            'headers' => [
            'X-Auth-Token' => $this->token,
            ],
            'json' => $data
            ]
        );
        return $response->getBody()->getContents();
    }
}
