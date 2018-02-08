<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class VersionController extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer";
    }

    /**
     *    Get version info
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/version-controller/getVersionInfoUsingGET
     */
    public function getInfo()
    {
        $endpoint = $this->endpoint("/info");
        return $this->client->get($endpoint);
    }
}
