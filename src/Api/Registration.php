<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Registration extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/registration";
    }

    /**
     *    Create a new account
     *
     * @see http://staging-integration.posios.com/documentation/registration.html#create-a-new-account
     */
    public function registerNewAccount(array $data)
    {
        $endpoint = $this->endpoint("/register");
        return $this->client->post($endpoint, $data);
    }
}
