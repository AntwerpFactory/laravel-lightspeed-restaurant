<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Reservation extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/reservation";
    }

    /**
     *    Get reservations
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/getReservationsUsingGET
     */
    public function getReservations(array $data = null)
    {
        $endpoint = $this->endpoint("/");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Create reservation
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/createReservationUsingPOST
     */
    public function createReservation(array $data)
    {
        $endpoint = $this->endpoint("/");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get tables with changed status
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/getTablesWithChangedStatusUsingGET
     */
    public function getTablesWithChangedStatus($changedAfter)
    {
        $endpoint = $this->endpoint("/changedtable");
        $query = $this->query(
            [
            'changedAfter' => $changedAfter
            ]
        );
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get reservation configuration
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/getReservationConfigurationUsingGET
     *
     * @return $this
     */
    public function getReservationConfiguration()
    {
        $endpoint = $this->endpoint("/configuration");
        return $this->client->get($endpoint);
    }

    /**
     *    Get free tables
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/getFreeTablesUsingGET
     *
     * @param  array $data
     * @return $this
     */
    public function getFreeTables(array $data = null)
    {
        $endpoint = $this->endpoint("/freetable");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Cancel reservation
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/cancelReservationUsingDELETE
     */
    public function cancelReservation($reservationId)
    {
        $endpoint = $this->endpoint("/{$reservationId}");
        return $this->client->delete($endpoint);
    }

    /**
     *    Get reservation
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/getReservationUsingGET
     */
    public function getReservation($reservationId)
    {
        $endpoint = $this->endpoint("/{$reservationId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Update reservation
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/updateReservationUsingPUT
     */
    public function updateReservation($reservationId, array $data)
    {
        $endpoint = $this->endpoint("/{$reservationId}");
        return $this->client->put($endpoint, $data);
    }

    /**
     *    Get receipts for reservation
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/reservation/getReceiptsForReservationUsingGET
     */
    public function getReceiptsForReservation($reservationId, array $data)
    {
        $endpoint = $this->endpoint("/{$reservationId}/receipt");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }
}
