<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Liteserver extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/liteserverConversion";
    }

    /**
     *    Convert the liteserver receipt id
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/liteserver-conversion/getCloudReceiptIdUsingGET
     */
    public function convertReceiptId(string $liteserverReceiptId)
    {
        $endpoint = $this->endpoint("/receipt/{$liteserverReceiptId}");
        return $this->client->get($endpoint);
    }
}
