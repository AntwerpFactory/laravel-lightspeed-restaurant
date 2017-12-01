<?php

namespace AntwerpFactory\LightspeedRestaurant;

use AntwerpFactory\LightspeedRestaurant\Api\ClientInterface;

class LightspeedRestaurant
{
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     *    INVENTORY API
     */
    public function accounting()
    {
        return new Api\Accounting($this->client);
    }

    /**
     *    CORE API
     */
    public function core()
    {
        return new Api\Core($this->client);
    }

    /**
     *    FINANCIAL API
     */
    public function financial()
    {
        return new Api\Financial($this->client);
    }
    
    /**
     *    INVENTORY API
     */
    public function inventory()
    {
        return new Api\Inventory($this->client);
    }

    /**
     *    LABOUR
     */
    public function labour()
    {
        return new Api\Labour($this->client);
    }

    /**
     *    LITESERVER CONVERSION
     */
    public function liteserver()
    {
        return new Api\Liteserver($this->client);
    }

    /**
     *    ONLINE ORDERING API
     */
    public function onlineOrdering()
    {
        return new Api\OnlineOrdering($this->client);
    }

    /**
     *    REGISTRATION API
     */
    public function registration()
    {
        return new Api\Registration($this->client);
    }

    /**
     *    RESERVATION
     */
    public function reservation()
    {
        return new Api\Reservation($this->client);
    }

    /**
     *    RESERVATION
     */
    public function versionController()
    {
        return new Api\VersionController($this->client);
    }
}
