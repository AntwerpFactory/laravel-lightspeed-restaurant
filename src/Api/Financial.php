<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Financial extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/financial";
    }

    /**
     *    Get product sales analytics
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/financial/getProductSalesAnalyticsUsingGET_1
     */
    public function getProductSalesAnalytics(string $from, string $to)
    {
        $endpoint = $this->endpoint("/analytics/productsales");
        $query = $this->query(
            [
            'from' => $from,
            'to'   => $to
            ]
        );
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get receipts
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/financial/getReceiptsUsingGET_1
     */
    public function getReceipts(array $data = null)
    {
        $endpoint = $this->endpoint("/receipt");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get unprocessed reports
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/financial/getUnprocessedReportsUsingGET_1
     */
    public function getUnprocessedReports()
    {
        $endpoint = $this->endpoint("/report/z/unprocessed");
        return $this->client->get($endpoint);
    }

    /**
     *    Get report
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/financial/getReportUsingGET_1
     */
    public function getReport(int $zNumber)
    {
        $endpoint = $this->endpoint("/report/z/{$zNumber}");
        return $this->client->get($endpoint);
    }

    /**
     *    Get report
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/financial/getReportStatusUsingGET_1
     */
    public function getReportStatus(int $zNumber)
    {
        $endpoint = $this->endpoint("/report/z/{$zNumber}/status");
        return $this->client->get($endpoint);
    }

    /**
     *    Update report status
     *
     * @see http://staging-exact-integration.posios.com/PosServer/swagger-ui.html#!/financial/updateReportStatusUsingPOST_1
     */
    public function updateReportStatus(int $zNumber, array $data)
    {
        $endpoint = $this->endpoint("/report/z/{$zNumber}/status");
        return $this->client->post($endpoint, $data);
    }
}
