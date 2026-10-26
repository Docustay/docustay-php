<?php
/**
 * WebhooksApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 */

/**
 * Docustay API 2026-10-07
 * https://docustay.app. MIT licence.
 */
/**
 * NOTE: This class is generated from the Docustay OpenAPI file.
 * https://docustay.app
 * Do not edit the class manually.
 */

namespace Docustay\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Docustay\ApiException;
use Docustay\Configuration;
use Docustay\HeaderSelector;
use Docustay\ObjectSerializer;

/**
 * WebhooksApi Class Doc Comment
 *
 * @category Class
 * @package  Docustay
 * @author   Docustay
 * @link     https://docustay.app
 */
class WebhooksApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'webhookDocumentsAiAllowanceLow' => [
            'application/json',
        ],
        'webhookDocumentsApprovalDecided' => [
            'application/json',
        ],
        'webhookDocumentsApprovalRequested' => [
            'application/json',
        ],
        'webhookDocumentsDocumentBounced' => [
            'application/json',
        ],
        'webhookDocumentsDocumentChangesRequested' => [
            'application/json',
        ],
        'webhookDocumentsDocumentCreated' => [
            'application/json',
        ],
        'webhookDocumentsDocumentDeclined' => [
            'application/json',
        ],
        'webhookDocumentsDocumentDelegated' => [
            'application/json',
        ],
        'webhookDocumentsDocumentDownloaded' => [
            'application/json',
        ],
        'webhookDocumentsDocumentExecuted' => [
            'application/json',
        ],
        'webhookDocumentsDocumentExpired' => [
            'application/json',
        ],
        'webhookDocumentsDocumentOpened' => [
            'application/json',
        ],
        'webhookDocumentsDocumentReminderDue' => [
            'application/json',
        ],
        'webhookDocumentsDocumentSent' => [
            'application/json',
        ],
        'webhookDocumentsDocumentSigned' => [
            'application/json',
        ],
        'webhookDocumentsDocumentVoided' => [
            'application/json',
        ],
        'webhookDocumentsEmailBounced' => [
            'application/json',
        ],
        'webhookDocumentsEmailComplained' => [
            'application/json',
        ],
        'webhookDocumentsEmailDelivered' => [
            'application/json',
        ],
        'webhookDocumentsEmailPaused' => [
            'application/json',
        ],
        'webhookDocumentsPaymentFailed' => [
            'application/json',
        ],
        'webhookDocumentsPaymentHoldLapsed' => [
            'application/json',
        ],
        'webhookDocumentsPaymentReceived' => [
            'application/json',
        ],
        'webhookDocumentsTeamCreated' => [
            'application/json',
        ],
        'webhookDocumentsTeamDeleted' => [
            'application/json',
        ],
        'webhookDocumentsTeamUpdated' => [
            'application/json',
        ],
        'webhookDocumentsTemplateCreated' => [
            'application/json',
        ],
        'webhookDocumentsTemplateFieldsDetected' => [
            'application/json',
        ],
        'webhookDocumentsUsageThreshold' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation webhookDocumentsAiAllowanceLow
     *
     * documents.ai.allowance_low
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsAiAllowanceLow'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsAiAllowanceLow($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsAiAllowanceLow'][0])
    {
        $this->webhookDocumentsAiAllowanceLowWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsAiAllowanceLowWithHttpInfo
     *
     * documents.ai.allowance_low
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsAiAllowanceLow'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsAiAllowanceLowWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsAiAllowanceLow'][0])
    {
        $request = $this->webhookDocumentsAiAllowanceLowRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsAiAllowanceLowAsync
     *
     * documents.ai.allowance_low
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsAiAllowanceLow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsAiAllowanceLowAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsAiAllowanceLow'][0])
    {
        return $this->webhookDocumentsAiAllowanceLowAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsAiAllowanceLowAsyncWithHttpInfo
     *
     * documents.ai.allowance_low
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsAiAllowanceLow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsAiAllowanceLowAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsAiAllowanceLow'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsAiAllowanceLowRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsAiAllowanceLow'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsAiAllowanceLow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsAiAllowanceLowRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsAiAllowanceLow'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsAiAllowanceLow'
            );
        }


        $resourcePath = '/documents.ai.allowance_low';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsApprovalDecided
     *
     * documents.approval.decided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalDecided'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsApprovalDecided($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalDecided'][0])
    {
        $this->webhookDocumentsApprovalDecidedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsApprovalDecidedWithHttpInfo
     *
     * documents.approval.decided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalDecided'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsApprovalDecidedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalDecided'][0])
    {
        $request = $this->webhookDocumentsApprovalDecidedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsApprovalDecidedAsync
     *
     * documents.approval.decided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalDecided'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsApprovalDecidedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalDecided'][0])
    {
        return $this->webhookDocumentsApprovalDecidedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsApprovalDecidedAsyncWithHttpInfo
     *
     * documents.approval.decided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalDecided'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsApprovalDecidedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalDecided'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsApprovalDecidedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsApprovalDecided'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalDecided'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsApprovalDecidedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalDecided'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsApprovalDecided'
            );
        }


        $resourcePath = '/documents.approval.decided';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsApprovalRequested
     *
     * documents.approval.requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalRequested'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsApprovalRequested($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalRequested'][0])
    {
        $this->webhookDocumentsApprovalRequestedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsApprovalRequestedWithHttpInfo
     *
     * documents.approval.requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalRequested'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsApprovalRequestedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalRequested'][0])
    {
        $request = $this->webhookDocumentsApprovalRequestedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsApprovalRequestedAsync
     *
     * documents.approval.requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalRequested'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsApprovalRequestedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalRequested'][0])
    {
        return $this->webhookDocumentsApprovalRequestedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsApprovalRequestedAsyncWithHttpInfo
     *
     * documents.approval.requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalRequested'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsApprovalRequestedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalRequested'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsApprovalRequestedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsApprovalRequested'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsApprovalRequested'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsApprovalRequestedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsApprovalRequested'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsApprovalRequested'
            );
        }


        $resourcePath = '/documents.approval.requested';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentBounced
     *
     * documents.document.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentBounced'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentBounced($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentBounced'][0])
    {
        $this->webhookDocumentsDocumentBouncedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentBouncedWithHttpInfo
     *
     * documents.document.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentBounced'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentBouncedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentBounced'][0])
    {
        $request = $this->webhookDocumentsDocumentBouncedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentBouncedAsync
     *
     * documents.document.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentBounced'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentBouncedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentBounced'][0])
    {
        return $this->webhookDocumentsDocumentBouncedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentBouncedAsyncWithHttpInfo
     *
     * documents.document.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentBounced'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentBouncedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentBounced'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentBouncedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentBounced'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentBounced'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentBouncedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentBounced'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentBounced'
            );
        }


        $resourcePath = '/documents.document.bounced';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentChangesRequested
     *
     * documents.document.changes_requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentChangesRequested'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentChangesRequested($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentChangesRequested'][0])
    {
        $this->webhookDocumentsDocumentChangesRequestedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentChangesRequestedWithHttpInfo
     *
     * documents.document.changes_requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentChangesRequested'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentChangesRequestedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentChangesRequested'][0])
    {
        $request = $this->webhookDocumentsDocumentChangesRequestedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentChangesRequestedAsync
     *
     * documents.document.changes_requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentChangesRequested'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentChangesRequestedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentChangesRequested'][0])
    {
        return $this->webhookDocumentsDocumentChangesRequestedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentChangesRequestedAsyncWithHttpInfo
     *
     * documents.document.changes_requested
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentChangesRequested'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentChangesRequestedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentChangesRequested'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentChangesRequestedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentChangesRequested'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentChangesRequested'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentChangesRequestedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentChangesRequested'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentChangesRequested'
            );
        }


        $resourcePath = '/documents.document.changes_requested';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentCreated
     *
     * documents.document.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentCreatedRequest $webhook_documents_document_created_request webhook_documents_document_created_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentCreated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentCreated($webhook_documents_document_created_request, string $contentType = self::contentTypes['webhookDocumentsDocumentCreated'][0])
    {
        $this->webhookDocumentsDocumentCreatedWithHttpInfo($webhook_documents_document_created_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentCreatedWithHttpInfo
     *
     * documents.document.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentCreatedRequest $webhook_documents_document_created_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentCreated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentCreatedWithHttpInfo($webhook_documents_document_created_request, string $contentType = self::contentTypes['webhookDocumentsDocumentCreated'][0])
    {
        $request = $this->webhookDocumentsDocumentCreatedRequest($webhook_documents_document_created_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentCreatedAsync
     *
     * documents.document.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentCreatedRequest $webhook_documents_document_created_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentCreatedAsync($webhook_documents_document_created_request, string $contentType = self::contentTypes['webhookDocumentsDocumentCreated'][0])
    {
        return $this->webhookDocumentsDocumentCreatedAsyncWithHttpInfo($webhook_documents_document_created_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentCreatedAsyncWithHttpInfo
     *
     * documents.document.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentCreatedRequest $webhook_documents_document_created_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentCreatedAsyncWithHttpInfo($webhook_documents_document_created_request, string $contentType = self::contentTypes['webhookDocumentsDocumentCreated'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentCreatedRequest($webhook_documents_document_created_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentCreated'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentCreatedRequest $webhook_documents_document_created_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentCreatedRequest($webhook_documents_document_created_request, string $contentType = self::contentTypes['webhookDocumentsDocumentCreated'][0])
    {

        // verify the required parameter 'webhook_documents_document_created_request' is set
        if ($webhook_documents_document_created_request === null || (is_array($webhook_documents_document_created_request) && count($webhook_documents_document_created_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_created_request when calling webhookDocumentsDocumentCreated'
            );
        }


        $resourcePath = '/documents.document.created';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_created_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_created_request));
            } else {
                $httpBody = $webhook_documents_document_created_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentDeclined
     *
     * documents.document.declined
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDeclined'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentDeclined($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDeclined'][0])
    {
        $this->webhookDocumentsDocumentDeclinedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentDeclinedWithHttpInfo
     *
     * documents.document.declined
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDeclined'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentDeclinedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDeclined'][0])
    {
        $request = $this->webhookDocumentsDocumentDeclinedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentDeclinedAsync
     *
     * documents.document.declined
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDeclined'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentDeclinedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDeclined'][0])
    {
        return $this->webhookDocumentsDocumentDeclinedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentDeclinedAsyncWithHttpInfo
     *
     * documents.document.declined
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDeclined'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentDeclinedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDeclined'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentDeclinedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentDeclined'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDeclined'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentDeclinedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDeclined'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentDeclined'
            );
        }


        $resourcePath = '/documents.document.declined';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentDelegated
     *
     * documents.document.delegated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDelegated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentDelegated($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDelegated'][0])
    {
        $this->webhookDocumentsDocumentDelegatedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentDelegatedWithHttpInfo
     *
     * documents.document.delegated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDelegated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentDelegatedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDelegated'][0])
    {
        $request = $this->webhookDocumentsDocumentDelegatedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentDelegatedAsync
     *
     * documents.document.delegated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDelegated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentDelegatedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDelegated'][0])
    {
        return $this->webhookDocumentsDocumentDelegatedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentDelegatedAsyncWithHttpInfo
     *
     * documents.document.delegated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDelegated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentDelegatedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDelegated'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentDelegatedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentDelegated'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDelegated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentDelegatedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDelegated'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentDelegated'
            );
        }


        $resourcePath = '/documents.document.delegated';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentDownloaded
     *
     * documents.document.downloaded
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDownloaded'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentDownloaded($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDownloaded'][0])
    {
        $this->webhookDocumentsDocumentDownloadedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentDownloadedWithHttpInfo
     *
     * documents.document.downloaded
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDownloaded'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentDownloadedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDownloaded'][0])
    {
        $request = $this->webhookDocumentsDocumentDownloadedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentDownloadedAsync
     *
     * documents.document.downloaded
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDownloaded'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentDownloadedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDownloaded'][0])
    {
        return $this->webhookDocumentsDocumentDownloadedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentDownloadedAsyncWithHttpInfo
     *
     * documents.document.downloaded
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDownloaded'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentDownloadedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDownloaded'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentDownloadedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentDownloaded'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentDownloaded'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentDownloadedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentDownloaded'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentDownloaded'
            );
        }


        $resourcePath = '/documents.document.downloaded';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentExecuted
     *
     * documents.document.executed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExecuted'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentExecuted($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExecuted'][0])
    {
        $this->webhookDocumentsDocumentExecutedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentExecutedWithHttpInfo
     *
     * documents.document.executed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExecuted'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentExecutedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExecuted'][0])
    {
        $request = $this->webhookDocumentsDocumentExecutedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentExecutedAsync
     *
     * documents.document.executed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExecuted'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentExecutedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExecuted'][0])
    {
        return $this->webhookDocumentsDocumentExecutedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentExecutedAsyncWithHttpInfo
     *
     * documents.document.executed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExecuted'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentExecutedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExecuted'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentExecutedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentExecuted'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExecuted'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentExecutedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExecuted'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentExecuted'
            );
        }


        $resourcePath = '/documents.document.executed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentExpired
     *
     * documents.document.expired
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExpired'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentExpired($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExpired'][0])
    {
        $this->webhookDocumentsDocumentExpiredWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentExpiredWithHttpInfo
     *
     * documents.document.expired
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExpired'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentExpiredWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExpired'][0])
    {
        $request = $this->webhookDocumentsDocumentExpiredRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentExpiredAsync
     *
     * documents.document.expired
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExpired'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentExpiredAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExpired'][0])
    {
        return $this->webhookDocumentsDocumentExpiredAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentExpiredAsyncWithHttpInfo
     *
     * documents.document.expired
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExpired'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentExpiredAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExpired'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentExpiredRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentExpired'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentExpired'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentExpiredRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentExpired'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentExpired'
            );
        }


        $resourcePath = '/documents.document.expired';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentOpened
     *
     * documents.document.opened
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentOpened'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentOpened($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentOpened'][0])
    {
        $this->webhookDocumentsDocumentOpenedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentOpenedWithHttpInfo
     *
     * documents.document.opened
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentOpened'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentOpenedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentOpened'][0])
    {
        $request = $this->webhookDocumentsDocumentOpenedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentOpenedAsync
     *
     * documents.document.opened
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentOpened'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentOpenedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentOpened'][0])
    {
        return $this->webhookDocumentsDocumentOpenedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentOpenedAsyncWithHttpInfo
     *
     * documents.document.opened
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentOpened'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentOpenedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentOpened'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentOpenedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentOpened'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentOpened'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentOpenedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentOpened'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentOpened'
            );
        }


        $resourcePath = '/documents.document.opened';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentReminderDue
     *
     * documents.document.reminder_due
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentReminderDue'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentReminderDue($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentReminderDue'][0])
    {
        $this->webhookDocumentsDocumentReminderDueWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentReminderDueWithHttpInfo
     *
     * documents.document.reminder_due
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentReminderDue'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentReminderDueWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentReminderDue'][0])
    {
        $request = $this->webhookDocumentsDocumentReminderDueRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentReminderDueAsync
     *
     * documents.document.reminder_due
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentReminderDue'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentReminderDueAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentReminderDue'][0])
    {
        return $this->webhookDocumentsDocumentReminderDueAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentReminderDueAsyncWithHttpInfo
     *
     * documents.document.reminder_due
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentReminderDue'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentReminderDueAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentReminderDue'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentReminderDueRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentReminderDue'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentReminderDue'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentReminderDueRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentReminderDue'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentReminderDue'
            );
        }


        $resourcePath = '/documents.document.reminder_due';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentSent
     *
     * documents.document.sent
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSent'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentSent($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSent'][0])
    {
        $this->webhookDocumentsDocumentSentWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentSentWithHttpInfo
     *
     * documents.document.sent
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSent'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentSentWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSent'][0])
    {
        $request = $this->webhookDocumentsDocumentSentRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentSentAsync
     *
     * documents.document.sent
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentSentAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSent'][0])
    {
        return $this->webhookDocumentsDocumentSentAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentSentAsyncWithHttpInfo
     *
     * documents.document.sent
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentSentAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSent'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentSentRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentSent'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSent'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentSentRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSent'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentSent'
            );
        }


        $resourcePath = '/documents.document.sent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentSigned
     *
     * documents.document.signed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSigned'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentSigned($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSigned'][0])
    {
        $this->webhookDocumentsDocumentSignedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentSignedWithHttpInfo
     *
     * documents.document.signed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSigned'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentSignedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSigned'][0])
    {
        $request = $this->webhookDocumentsDocumentSignedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentSignedAsync
     *
     * documents.document.signed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSigned'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentSignedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSigned'][0])
    {
        return $this->webhookDocumentsDocumentSignedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentSignedAsyncWithHttpInfo
     *
     * documents.document.signed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSigned'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentSignedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSigned'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentSignedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentSigned'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentSigned'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentSignedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentSigned'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentSigned'
            );
        }


        $resourcePath = '/documents.document.signed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsDocumentVoided
     *
     * documents.document.voided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentVoided'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsDocumentVoided($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentVoided'][0])
    {
        $this->webhookDocumentsDocumentVoidedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsDocumentVoidedWithHttpInfo
     *
     * documents.document.voided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentVoided'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsDocumentVoidedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentVoided'][0])
    {
        $request = $this->webhookDocumentsDocumentVoidedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsDocumentVoidedAsync
     *
     * documents.document.voided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentVoided'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentVoidedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentVoided'][0])
    {
        return $this->webhookDocumentsDocumentVoidedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsDocumentVoidedAsyncWithHttpInfo
     *
     * documents.document.voided
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentVoided'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsDocumentVoidedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentVoided'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsDocumentVoidedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsDocumentVoided'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsDocumentVoided'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsDocumentVoidedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsDocumentVoided'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsDocumentVoided'
            );
        }


        $resourcePath = '/documents.document.voided';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsEmailBounced
     *
     * documents.email.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailBounced'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsEmailBounced($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailBounced'][0])
    {
        $this->webhookDocumentsEmailBouncedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsEmailBouncedWithHttpInfo
     *
     * documents.email.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailBounced'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsEmailBouncedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailBounced'][0])
    {
        $request = $this->webhookDocumentsEmailBouncedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsEmailBouncedAsync
     *
     * documents.email.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailBounced'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailBouncedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailBounced'][0])
    {
        return $this->webhookDocumentsEmailBouncedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsEmailBouncedAsyncWithHttpInfo
     *
     * documents.email.bounced
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailBounced'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailBouncedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailBounced'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsEmailBouncedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsEmailBounced'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailBounced'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsEmailBouncedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailBounced'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsEmailBounced'
            );
        }


        $resourcePath = '/documents.email.bounced';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsEmailComplained
     *
     * documents.email.complained
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailComplained'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsEmailComplained($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailComplained'][0])
    {
        $this->webhookDocumentsEmailComplainedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsEmailComplainedWithHttpInfo
     *
     * documents.email.complained
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailComplained'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsEmailComplainedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailComplained'][0])
    {
        $request = $this->webhookDocumentsEmailComplainedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsEmailComplainedAsync
     *
     * documents.email.complained
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailComplained'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailComplainedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailComplained'][0])
    {
        return $this->webhookDocumentsEmailComplainedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsEmailComplainedAsyncWithHttpInfo
     *
     * documents.email.complained
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailComplained'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailComplainedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailComplained'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsEmailComplainedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsEmailComplained'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailComplained'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsEmailComplainedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailComplained'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsEmailComplained'
            );
        }


        $resourcePath = '/documents.email.complained';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsEmailDelivered
     *
     * documents.email.delivered
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailDelivered'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsEmailDelivered($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailDelivered'][0])
    {
        $this->webhookDocumentsEmailDeliveredWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsEmailDeliveredWithHttpInfo
     *
     * documents.email.delivered
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailDelivered'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsEmailDeliveredWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailDelivered'][0])
    {
        $request = $this->webhookDocumentsEmailDeliveredRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsEmailDeliveredAsync
     *
     * documents.email.delivered
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailDelivered'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailDeliveredAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailDelivered'][0])
    {
        return $this->webhookDocumentsEmailDeliveredAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsEmailDeliveredAsyncWithHttpInfo
     *
     * documents.email.delivered
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailDelivered'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailDeliveredAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailDelivered'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsEmailDeliveredRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsEmailDelivered'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailDelivered'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsEmailDeliveredRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailDelivered'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsEmailDelivered'
            );
        }


        $resourcePath = '/documents.email.delivered';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsEmailPaused
     *
     * documents.email.paused
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailPaused'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsEmailPaused($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailPaused'][0])
    {
        $this->webhookDocumentsEmailPausedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsEmailPausedWithHttpInfo
     *
     * documents.email.paused
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailPaused'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsEmailPausedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailPaused'][0])
    {
        $request = $this->webhookDocumentsEmailPausedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsEmailPausedAsync
     *
     * documents.email.paused
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailPaused'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailPausedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailPaused'][0])
    {
        return $this->webhookDocumentsEmailPausedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsEmailPausedAsyncWithHttpInfo
     *
     * documents.email.paused
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailPaused'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsEmailPausedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailPaused'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsEmailPausedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsEmailPaused'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsEmailPaused'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsEmailPausedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsEmailPaused'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsEmailPaused'
            );
        }


        $resourcePath = '/documents.email.paused';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsPaymentFailed
     *
     * documents.payment.failed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentFailed'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsPaymentFailed($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentFailed'][0])
    {
        $this->webhookDocumentsPaymentFailedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsPaymentFailedWithHttpInfo
     *
     * documents.payment.failed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentFailed'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsPaymentFailedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentFailed'][0])
    {
        $request = $this->webhookDocumentsPaymentFailedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsPaymentFailedAsync
     *
     * documents.payment.failed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentFailed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsPaymentFailedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentFailed'][0])
    {
        return $this->webhookDocumentsPaymentFailedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsPaymentFailedAsyncWithHttpInfo
     *
     * documents.payment.failed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentFailed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsPaymentFailedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentFailed'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsPaymentFailedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsPaymentFailed'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentFailed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsPaymentFailedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentFailed'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsPaymentFailed'
            );
        }


        $resourcePath = '/documents.payment.failed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsPaymentHoldLapsed
     *
     * documents.payment.hold_lapsed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentHoldLapsed'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsPaymentHoldLapsed($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentHoldLapsed'][0])
    {
        $this->webhookDocumentsPaymentHoldLapsedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsPaymentHoldLapsedWithHttpInfo
     *
     * documents.payment.hold_lapsed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentHoldLapsed'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsPaymentHoldLapsedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentHoldLapsed'][0])
    {
        $request = $this->webhookDocumentsPaymentHoldLapsedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsPaymentHoldLapsedAsync
     *
     * documents.payment.hold_lapsed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentHoldLapsed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsPaymentHoldLapsedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentHoldLapsed'][0])
    {
        return $this->webhookDocumentsPaymentHoldLapsedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsPaymentHoldLapsedAsyncWithHttpInfo
     *
     * documents.payment.hold_lapsed
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentHoldLapsed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsPaymentHoldLapsedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentHoldLapsed'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsPaymentHoldLapsedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsPaymentHoldLapsed'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentHoldLapsed'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsPaymentHoldLapsedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentHoldLapsed'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsPaymentHoldLapsed'
            );
        }


        $resourcePath = '/documents.payment.hold_lapsed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsPaymentReceived
     *
     * documents.payment.received
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentReceived'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsPaymentReceived($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentReceived'][0])
    {
        $this->webhookDocumentsPaymentReceivedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsPaymentReceivedWithHttpInfo
     *
     * documents.payment.received
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentReceived'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsPaymentReceivedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentReceived'][0])
    {
        $request = $this->webhookDocumentsPaymentReceivedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsPaymentReceivedAsync
     *
     * documents.payment.received
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentReceived'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsPaymentReceivedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentReceived'][0])
    {
        return $this->webhookDocumentsPaymentReceivedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsPaymentReceivedAsyncWithHttpInfo
     *
     * documents.payment.received
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentReceived'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsPaymentReceivedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentReceived'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsPaymentReceivedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsPaymentReceived'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsPaymentReceived'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsPaymentReceivedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsPaymentReceived'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsPaymentReceived'
            );
        }


        $resourcePath = '/documents.payment.received';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsTeamCreated
     *
     * documents.team.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamCreated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsTeamCreated($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamCreated'][0])
    {
        $this->webhookDocumentsTeamCreatedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsTeamCreatedWithHttpInfo
     *
     * documents.team.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamCreated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsTeamCreatedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamCreated'][0])
    {
        $request = $this->webhookDocumentsTeamCreatedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsTeamCreatedAsync
     *
     * documents.team.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTeamCreatedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamCreated'][0])
    {
        return $this->webhookDocumentsTeamCreatedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsTeamCreatedAsyncWithHttpInfo
     *
     * documents.team.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTeamCreatedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamCreated'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsTeamCreatedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsTeamCreated'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsTeamCreatedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamCreated'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsTeamCreated'
            );
        }


        $resourcePath = '/documents.team.created';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsTeamDeleted
     *
     * documents.team.deleted
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamDeleted'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsTeamDeleted($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamDeleted'][0])
    {
        $this->webhookDocumentsTeamDeletedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsTeamDeletedWithHttpInfo
     *
     * documents.team.deleted
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamDeleted'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsTeamDeletedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamDeleted'][0])
    {
        $request = $this->webhookDocumentsTeamDeletedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsTeamDeletedAsync
     *
     * documents.team.deleted
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamDeleted'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTeamDeletedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamDeleted'][0])
    {
        return $this->webhookDocumentsTeamDeletedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsTeamDeletedAsyncWithHttpInfo
     *
     * documents.team.deleted
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamDeleted'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTeamDeletedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamDeleted'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsTeamDeletedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsTeamDeleted'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamDeleted'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsTeamDeletedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamDeleted'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsTeamDeleted'
            );
        }


        $resourcePath = '/documents.team.deleted';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsTeamUpdated
     *
     * documents.team.updated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamUpdated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsTeamUpdated($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamUpdated'][0])
    {
        $this->webhookDocumentsTeamUpdatedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsTeamUpdatedWithHttpInfo
     *
     * documents.team.updated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamUpdated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsTeamUpdatedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamUpdated'][0])
    {
        $request = $this->webhookDocumentsTeamUpdatedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsTeamUpdatedAsync
     *
     * documents.team.updated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamUpdated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTeamUpdatedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamUpdated'][0])
    {
        return $this->webhookDocumentsTeamUpdatedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsTeamUpdatedAsyncWithHttpInfo
     *
     * documents.team.updated
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamUpdated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTeamUpdatedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamUpdated'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsTeamUpdatedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsTeamUpdated'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTeamUpdated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsTeamUpdatedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTeamUpdated'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsTeamUpdated'
            );
        }


        $resourcePath = '/documents.team.updated';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsTemplateCreated
     *
     * documents.template.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateCreated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsTemplateCreated($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateCreated'][0])
    {
        $this->webhookDocumentsTemplateCreatedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsTemplateCreatedWithHttpInfo
     *
     * documents.template.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateCreated'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsTemplateCreatedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateCreated'][0])
    {
        $request = $this->webhookDocumentsTemplateCreatedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsTemplateCreatedAsync
     *
     * documents.template.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTemplateCreatedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateCreated'][0])
    {
        return $this->webhookDocumentsTemplateCreatedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsTemplateCreatedAsyncWithHttpInfo
     *
     * documents.template.created
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTemplateCreatedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateCreated'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsTemplateCreatedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsTemplateCreated'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateCreated'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsTemplateCreatedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateCreated'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsTemplateCreated'
            );
        }


        $resourcePath = '/documents.template.created';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsTemplateFieldsDetected
     *
     * documents.template.fields_detected
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateFieldsDetected'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsTemplateFieldsDetected($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateFieldsDetected'][0])
    {
        $this->webhookDocumentsTemplateFieldsDetectedWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsTemplateFieldsDetectedWithHttpInfo
     *
     * documents.template.fields_detected
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateFieldsDetected'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsTemplateFieldsDetectedWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateFieldsDetected'][0])
    {
        $request = $this->webhookDocumentsTemplateFieldsDetectedRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsTemplateFieldsDetectedAsync
     *
     * documents.template.fields_detected
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateFieldsDetected'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTemplateFieldsDetectedAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateFieldsDetected'][0])
    {
        return $this->webhookDocumentsTemplateFieldsDetectedAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsTemplateFieldsDetectedAsyncWithHttpInfo
     *
     * documents.template.fields_detected
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateFieldsDetected'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsTemplateFieldsDetectedAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateFieldsDetected'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsTemplateFieldsDetectedRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsTemplateFieldsDetected'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsTemplateFieldsDetected'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsTemplateFieldsDetectedRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsTemplateFieldsDetected'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsTemplateFieldsDetected'
            );
        }


        $resourcePath = '/documents.template.fields_detected';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookDocumentsUsageThreshold
     *
     * documents.usage.threshold
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsUsageThreshold'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookDocumentsUsageThreshold($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsUsageThreshold'][0])
    {
        $this->webhookDocumentsUsageThresholdWithHttpInfo($webhook_documents_document_sent_request, $contentType);
    }

    /**
     * Operation webhookDocumentsUsageThresholdWithHttpInfo
     *
     * documents.usage.threshold
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsUsageThreshold'] to see the possible values for this operation
     *
     * @throws \Docustay\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookDocumentsUsageThresholdWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsUsageThreshold'][0])
    {
        $request = $this->webhookDocumentsUsageThresholdRequest($webhook_documents_document_sent_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookDocumentsUsageThresholdAsync
     *
     * documents.usage.threshold
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsUsageThreshold'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsUsageThresholdAsync($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsUsageThreshold'][0])
    {
        return $this->webhookDocumentsUsageThresholdAsyncWithHttpInfo($webhook_documents_document_sent_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookDocumentsUsageThresholdAsyncWithHttpInfo
     *
     * documents.usage.threshold
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsUsageThreshold'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookDocumentsUsageThresholdAsyncWithHttpInfo($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsUsageThreshold'][0])
    {
        $returnType = '';
        $request = $this->webhookDocumentsUsageThresholdRequest($webhook_documents_document_sent_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookDocumentsUsageThreshold'
     *
     * @param  \Docustay\Model\WebhookDocumentsDocumentSentRequest $webhook_documents_document_sent_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['webhookDocumentsUsageThreshold'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function webhookDocumentsUsageThresholdRequest($webhook_documents_document_sent_request, string $contentType = self::contentTypes['webhookDocumentsUsageThreshold'][0])
    {

        // verify the required parameter 'webhook_documents_document_sent_request' is set
        if ($webhook_documents_document_sent_request === null || (is_array($webhook_documents_document_sent_request) && count($webhook_documents_document_sent_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhook_documents_document_sent_request when calling webhookDocumentsUsageThreshold'
            );
        }


        $resourcePath = '/documents.usage.threshold';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($webhook_documents_document_sent_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($webhook_documents_document_sent_request));
            } else {
                $httpBody = $webhook_documents_document_sent_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
