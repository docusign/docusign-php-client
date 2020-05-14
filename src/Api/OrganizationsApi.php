<?php
/**
 * OrganizationsApi
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Api\OrganizationsApi;



namespace DocuSign\eSign\Api;

use \DocuSign\eSign\Client\ApiClient;
use \DocuSign\eSign\Client\ApiException;
use \DocuSign\eSign\Configuration;
use \DocuSign\eSign\ObjectSerializer;

/**
 * OrganizationsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganizationsApi
{
    /**
     * API Client
     *
     * @var \DocuSign\eSign\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DocuSign\eSign\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DocuSign\eSign\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \DocuSign\eSign\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DocuSign\eSign\Client\ApiClient $apiClient set the API client
     *
     * @return OrganizationsApi
     */
    public function setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteReport
     *
     * Retrieves org level report by correlation id and site.
     *
    * @param string $organization_id 
    * @param string $report_correlation_id 
     * @throws \DocuSign\eSign\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteReport($organization_id, $report_correlation_id)
    {
        list($response) = $this->deleteReportWithHttpInfo($organization_id, $report_correlation_id);
        return $response;
    }

    /**
     * Operation deleteReportWithHttpInfo
     *
     * Retrieves org level report by correlation id and site.
     *
    * @param string $organization_id 
    * @param string $report_correlation_id 
     * @throws \DocuSign\eSign\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteReportWithHttpInfo($organization_id, $report_correlation_id)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_id when calling deleteReport');
        }
        // verify the required parameter 'report_correlation_id' is set
        if ($report_correlation_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_correlation_id when calling deleteReport');
        }
        // parse inputs
        $resourcePath = "/v2/organization_reporting/{organizationId}/reports/{reportCorrelationId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($report_correlation_id !== null) {
            $resourcePath = str_replace(
                "{" . "reportCorrelationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_correlation_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/organization_reporting/{organizationId}/reports/{reportCorrelationId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReport
     *
     * Retrieves org level report by correlation id and site.
     *
    * @param string $organization_id 
    * @param string $report_correlation_id 
     * @throws \DocuSign\eSign\Client\ApiException on non-2xx response
     * @return void
     */
    public function getReport($organization_id, $report_correlation_id)
    {
        list($response) = $this->getReportWithHttpInfo($organization_id, $report_correlation_id);
        return $response;
    }

    /**
     * Operation getReportWithHttpInfo
     *
     * Retrieves org level report by correlation id and site.
     *
    * @param string $organization_id 
    * @param string $report_correlation_id 
     * @throws \DocuSign\eSign\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportWithHttpInfo($organization_id, $report_correlation_id)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_id when calling getReport');
        }
        // verify the required parameter 'report_correlation_id' is set
        if ($report_correlation_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_correlation_id when calling getReport');
        }
        // parse inputs
        $resourcePath = "/v2/organization_reporting/{organizationId}/reports/{reportCorrelationId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($report_correlation_id !== null) {
            $resourcePath = str_replace(
                "{" . "reportCorrelationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_correlation_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/organization_reporting/{organizationId}/reports/{reportCorrelationId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
