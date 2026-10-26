# Docustay\WebhooksApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhookDocumentsAiAllowanceLow()**](WebhooksApi.md#webhookDocumentsAiAllowanceLow) | **POST** /documents.ai.allowance_low | documents.ai.allowance_low |
| [**webhookDocumentsApprovalDecided()**](WebhooksApi.md#webhookDocumentsApprovalDecided) | **POST** /documents.approval.decided | documents.approval.decided |
| [**webhookDocumentsApprovalRequested()**](WebhooksApi.md#webhookDocumentsApprovalRequested) | **POST** /documents.approval.requested | documents.approval.requested |
| [**webhookDocumentsDocumentBounced()**](WebhooksApi.md#webhookDocumentsDocumentBounced) | **POST** /documents.document.bounced | documents.document.bounced |
| [**webhookDocumentsDocumentChangesRequested()**](WebhooksApi.md#webhookDocumentsDocumentChangesRequested) | **POST** /documents.document.changes_requested | documents.document.changes_requested |
| [**webhookDocumentsDocumentCreated()**](WebhooksApi.md#webhookDocumentsDocumentCreated) | **POST** /documents.document.created | documents.document.created |
| [**webhookDocumentsDocumentDeclined()**](WebhooksApi.md#webhookDocumentsDocumentDeclined) | **POST** /documents.document.declined | documents.document.declined |
| [**webhookDocumentsDocumentDelegated()**](WebhooksApi.md#webhookDocumentsDocumentDelegated) | **POST** /documents.document.delegated | documents.document.delegated |
| [**webhookDocumentsDocumentDownloaded()**](WebhooksApi.md#webhookDocumentsDocumentDownloaded) | **POST** /documents.document.downloaded | documents.document.downloaded |
| [**webhookDocumentsDocumentExecuted()**](WebhooksApi.md#webhookDocumentsDocumentExecuted) | **POST** /documents.document.executed | documents.document.executed |
| [**webhookDocumentsDocumentExpired()**](WebhooksApi.md#webhookDocumentsDocumentExpired) | **POST** /documents.document.expired | documents.document.expired |
| [**webhookDocumentsDocumentOpened()**](WebhooksApi.md#webhookDocumentsDocumentOpened) | **POST** /documents.document.opened | documents.document.opened |
| [**webhookDocumentsDocumentReminderDue()**](WebhooksApi.md#webhookDocumentsDocumentReminderDue) | **POST** /documents.document.reminder_due | documents.document.reminder_due |
| [**webhookDocumentsDocumentSent()**](WebhooksApi.md#webhookDocumentsDocumentSent) | **POST** /documents.document.sent | documents.document.sent |
| [**webhookDocumentsDocumentSigned()**](WebhooksApi.md#webhookDocumentsDocumentSigned) | **POST** /documents.document.signed | documents.document.signed |
| [**webhookDocumentsDocumentVoided()**](WebhooksApi.md#webhookDocumentsDocumentVoided) | **POST** /documents.document.voided | documents.document.voided |
| [**webhookDocumentsEmailBounced()**](WebhooksApi.md#webhookDocumentsEmailBounced) | **POST** /documents.email.bounced | documents.email.bounced |
| [**webhookDocumentsEmailComplained()**](WebhooksApi.md#webhookDocumentsEmailComplained) | **POST** /documents.email.complained | documents.email.complained |
| [**webhookDocumentsEmailDelivered()**](WebhooksApi.md#webhookDocumentsEmailDelivered) | **POST** /documents.email.delivered | documents.email.delivered |
| [**webhookDocumentsEmailPaused()**](WebhooksApi.md#webhookDocumentsEmailPaused) | **POST** /documents.email.paused | documents.email.paused |
| [**webhookDocumentsPaymentFailed()**](WebhooksApi.md#webhookDocumentsPaymentFailed) | **POST** /documents.payment.failed | documents.payment.failed |
| [**webhookDocumentsPaymentHoldLapsed()**](WebhooksApi.md#webhookDocumentsPaymentHoldLapsed) | **POST** /documents.payment.hold_lapsed | documents.payment.hold_lapsed |
| [**webhookDocumentsPaymentReceived()**](WebhooksApi.md#webhookDocumentsPaymentReceived) | **POST** /documents.payment.received | documents.payment.received |
| [**webhookDocumentsTeamCreated()**](WebhooksApi.md#webhookDocumentsTeamCreated) | **POST** /documents.team.created | documents.team.created |
| [**webhookDocumentsTeamDeleted()**](WebhooksApi.md#webhookDocumentsTeamDeleted) | **POST** /documents.team.deleted | documents.team.deleted |
| [**webhookDocumentsTeamUpdated()**](WebhooksApi.md#webhookDocumentsTeamUpdated) | **POST** /documents.team.updated | documents.team.updated |
| [**webhookDocumentsTemplateCreated()**](WebhooksApi.md#webhookDocumentsTemplateCreated) | **POST** /documents.template.created | documents.template.created |
| [**webhookDocumentsTemplateFieldsDetected()**](WebhooksApi.md#webhookDocumentsTemplateFieldsDetected) | **POST** /documents.template.fields_detected | documents.template.fields_detected |
| [**webhookDocumentsUsageThreshold()**](WebhooksApi.md#webhookDocumentsUsageThreshold) | **POST** /documents.usage.threshold | documents.usage.threshold |


## `webhookDocumentsAiAllowanceLow()`

```php
webhookDocumentsAiAllowanceLow($webhook_documents_document_sent_request)
```

documents.ai.allowance_low

The workspace's Scribe allowance is nearly used. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.ai.allowance_low","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsAiAllowanceLow($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsAiAllowanceLow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsApprovalDecided()`

```php
webhookDocumentsApprovalDecided($webhook_documents_document_sent_request)
```

documents.approval.decided

A person approved or declined a send that a draft-only key asked for. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.approval.decided","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsApprovalDecided($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsApprovalDecided: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsApprovalRequested()`

```php
webhookDocumentsApprovalRequested($webhook_documents_document_sent_request)
```

documents.approval.requested

A draft-only key asked to send, and a person must approve. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.approval.requested","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsApprovalRequested($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsApprovalRequested: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentBounced()`

```php
webhookDocumentsDocumentBounced($webhook_documents_document_sent_request)
```

documents.document.bounced

An email to a signer could not be delivered. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.bounced","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentBounced($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentBounced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentChangesRequested()`

```php
webhookDocumentsDocumentChangesRequested($webhook_documents_document_sent_request)
```

documents.document.changes_requested

A person asked for changes instead of signing. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.changes_requested","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentChangesRequested($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentChangesRequested: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentCreated()`

```php
webhookDocumentsDocumentCreated($webhook_documents_document_created_request)
```

documents.document.created

A document was made. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_created_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.created","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentCreatedRequest

try {
    $apiInstance->webhookDocumentsDocumentCreated($webhook_documents_document_created_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_created_request** | [**\Docustay\Model\WebhookDocumentsDocumentCreatedRequest**](../Model/WebhookDocumentsDocumentCreatedRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentDeclined()`

```php
webhookDocumentsDocumentDeclined($webhook_documents_document_sent_request)
```

documents.document.declined

A person declined to sign. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.declined","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentDeclined($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentDeclined: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentDelegated()`

```php
webhookDocumentsDocumentDelegated($webhook_documents_document_sent_request)
```

documents.document.delegated

A person passed their part to someone else. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.delegated","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentDelegated($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentDelegated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentDownloaded()`

```php
webhookDocumentsDocumentDownloaded($webhook_documents_document_sent_request)
```

documents.document.downloaded

Someone downloaded the document or its sealed copy. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.downloaded","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentDownloaded($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentDownloaded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentExecuted()`

```php
webhookDocumentsDocumentExecuted($webhook_documents_document_sent_request)
```

documents.document.executed

Everyone signed and the sealed copy is ready. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.executed","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentExecuted($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentExecuted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentExpired()`

```php
webhookDocumentsDocumentExpired($webhook_documents_document_sent_request)
```

documents.document.expired

The document reached its deadline unsigned. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.expired","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentExpired($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentExpired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentOpened()`

```php
webhookDocumentsDocumentOpened($webhook_documents_document_sent_request)
```

documents.document.opened

A person opened the document. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.opened","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentOpened($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentOpened: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentReminderDue()`

```php
webhookDocumentsDocumentReminderDue($webhook_documents_document_sent_request)
```

documents.document.reminder_due

A scheduled reminder came due. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.reminder_due","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentReminderDue($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentReminderDue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentSent()`

```php
webhookDocumentsDocumentSent($webhook_documents_document_sent_request)
```

documents.document.sent

A document was sent to its people. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.sent","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentSent($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentSigned()`

```php
webhookDocumentsDocumentSigned($webhook_documents_document_sent_request)
```

documents.document.signed

A person signed their part. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.signed","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentSigned($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentSigned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsDocumentVoided()`

```php
webhookDocumentsDocumentVoided($webhook_documents_document_sent_request)
```

documents.document.voided

The sender cancelled the document. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.document.voided","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsDocumentVoided($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsDocumentVoided: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsEmailBounced()`

```php
webhookDocumentsEmailBounced($webhook_documents_document_sent_request)
```

documents.email.bounced

An email bounced. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.email.bounced","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsEmailBounced($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsEmailBounced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsEmailComplained()`

```php
webhookDocumentsEmailComplained($webhook_documents_document_sent_request)
```

documents.email.complained

A recipient marked an email as spam. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.email.complained","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsEmailComplained($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsEmailComplained: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsEmailDelivered()`

```php
webhookDocumentsEmailDelivered($webhook_documents_document_sent_request)
```

documents.email.delivered

The mail provider delivered an email. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.email.delivered","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsEmailDelivered($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsEmailDelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsEmailPaused()`

```php
webhookDocumentsEmailPaused($webhook_documents_document_sent_request)
```

documents.email.paused

Sending to an address was paused after repeated problems. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.email.paused","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsEmailPaused($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsEmailPaused: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsPaymentFailed()`

```php
webhookDocumentsPaymentFailed($webhook_documents_document_sent_request)
```

documents.payment.failed

A payment, or a plan invoice, failed. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.payment.failed","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsPaymentFailed($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsPaymentFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsPaymentHoldLapsed()`

```php
webhookDocumentsPaymentHoldLapsed($webhook_documents_document_sent_request)
```

documents.payment.hold_lapsed

A payment hold ran out before the signer paid. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.payment.hold_lapsed","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsPaymentHoldLapsed($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsPaymentHoldLapsed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsPaymentReceived()`

```php
webhookDocumentsPaymentReceived($webhook_documents_document_sent_request)
```

documents.payment.received

A signer paid. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.payment.received","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsPaymentReceived($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsPaymentReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsTeamCreated()`

```php
webhookDocumentsTeamCreated($webhook_documents_document_sent_request)
```

documents.team.created

A team was made. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.team.created","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsTeamCreated($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsTeamCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsTeamDeleted()`

```php
webhookDocumentsTeamDeleted($webhook_documents_document_sent_request)
```

documents.team.deleted

A team was deleted. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.team.deleted","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsTeamDeleted($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsTeamDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsTeamUpdated()`

```php
webhookDocumentsTeamUpdated($webhook_documents_document_sent_request)
```

documents.team.updated

A team was changed. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.team.updated","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsTeamUpdated($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsTeamUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsTemplateCreated()`

```php
webhookDocumentsTemplateCreated($webhook_documents_document_sent_request)
```

documents.template.created

A template was made. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.template.created","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsTemplateCreated($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsTemplateCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsTemplateFieldsDetected()`

```php
webhookDocumentsTemplateFieldsDetected($webhook_documents_document_sent_request)
```

documents.template.fields_detected

Fields were found in an uploaded file. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.template.fields_detected","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsTemplateFieldsDetected($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsTemplateFieldsDetected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDocumentsUsageThreshold()`

```php
webhookDocumentsUsageThreshold($webhook_documents_document_sent_request)
```

documents.usage.threshold

The workspace crossed a usage threshold. Signed with the Standard Webhooks headers webhook-id, webhook-timestamp and webhook-signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_documents_document_sent_request = {"id":"01a1362b-5187-7ab3-a070-9abc82270c04","topic":"documents.usage.threshold","subject_type":"document","subject_id":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","payload":{"test":false},"emitted_at":"2026-10-13T17:02:11.412Z"}; // \Docustay\Model\WebhookDocumentsDocumentSentRequest

try {
    $apiInstance->webhookDocumentsUsageThreshold($webhook_documents_document_sent_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookDocumentsUsageThreshold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_documents_document_sent_request** | [**\Docustay\Model\WebhookDocumentsDocumentSentRequest**](../Model/WebhookDocumentsDocumentSentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
