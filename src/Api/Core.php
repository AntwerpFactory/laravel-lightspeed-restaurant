<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Core extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/core";
    }

    /**
     *    Get companies related to this token
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCompaniesUsingGET
     */
    public function getCompanies()
    {
        $endpoint = $this->endpoint("/company");
        return $this->client->get($endpoint);
    }

    /**
     *    Get company
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCompanyUsingGET
     */
    public function getCompany($companyId)
    {
        $endpoint = $this->endpoint("/company/{$companyId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Patch company
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/patchCompanyUsingPATCH
     */
    public function patchCompany($companyId, array $data)
    {
        $endpoint = $this->endpoint("/company/{$companyId}");
        return $this->client->patch($endpoint, $data);
    }

    /**
     *    Get customers
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCustomersUsingGET
     */
    public function getCustomers(array $data = null)
    {
        $endpoint = $this->endpoint("/customer");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Create customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/createCustomerUsingPOST
     */
    public function createCustomer(array  $data)
    {
        $endpoint = $this->endpoint("/customer");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCustomerUsingGET
     */
    public function getCustomer($customerId)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Update customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/updateCustomerUsingPUT
     */
    public function updateCustomer($customerId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}");
        return $this->client->put($endpoint, $data);
    }

    /**
     *    Get customer credit
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCustomerCreditsUsingGET
     */
    public function getCustomerCredit($customerId, array $data = null)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/credit");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get customer credit changes
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCustomerCreditChangesUsingGET
     */
    public function getCustomerCreditChanges($customerId)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/creditchange");
        return $this->client->get($endpoint);
    }

    /**
     *    Add customer credit changes
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/addCustomerCreditsChangeUsingPOST
     */
    public function addCustomerCreditChanges($customerId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/creditchange");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Add loyalty card
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/addLoyaltyCardUsingPOST
     */
    public function addLoyaltyCard($customerId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/loyaltycard");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get company establishments
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getCompanyEstablishmentsUsingGET
     */
    public function getCompanyEstablishments()
    {
        $endpoint = $this->endpoint("/establishment");
        return $this->client->get($endpoint);
    }

    /**
     *    Get floors
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getFloorsUsingGET
     */
    public function getFloors(array $data = null)
    {
        $endpoint = $this->endpoint("/floor");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get floor
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getFloorUsingGET
     */
    public function getFloor($floorId)
    {
        $endpoint = $this->endpoint("/floor/{$floorId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Get tables for floor
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getTablesForFloorUsingGET
     */
    public function getTablesForFloor($floorId, array $data = null)
    {
        $endpoint = $this->endpoint("/floor/{$floorId}/table");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get referrals
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getReferralsUsingGET
     */
    public function getReferrals()
    {
        $endpoint = $this->endpoint("/referral");
        return $this->client->get($endpoint);
    }

    /**
     *    Get tables
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getTablesUsingGET
     */
    public function getTables(array $data = null)
    {
        $endpoint = $this->endpoint("/tables");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get table
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/core/getTableUsingGET
     */
    public function getTable($tableId)
    {
        $endpoint = $this->endpoint("/tables/{$tableId}");
        return $this->client->get($endpoint);
    }
}
