# Docustay\EmailApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listEmailTemplates()**](EmailApi.md#listEmailTemplates) | **GET** /api/v1/email-templates | The workspace&#39;s email wording |
| [**listEmails()**](EmailApi.md#listEmails) | **GET** /api/v1/emails | The log of email about your documents |
| [**previewEmailTemplate()**](EmailApi.md#previewEmailTemplate) | **POST** /api/v1/email-templates/{kind}/preview | Preview an email with made-up names |
| [**resetEmailTemplate()**](EmailApi.md#resetEmailTemplate) | **DELETE** /api/v1/email-templates/{kind} | Back to the standard wording |
| [**saveEmailTemplate()**](EmailApi.md#saveEmailTemplate) | **PUT** /api/v1/email-templates/{kind} | Set the wording of one email |


## `listEmailTemplates()`

```php
listEmailTemplates($locale): \Docustay\Model\ListEmailTemplates200Response
```

The workspace's email wording

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = 'locale_example'; // string

try {
    $result = $apiInstance->listEmailTemplates($locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmailTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**|  | [optional] |

### Return type

[**\Docustay\Model\ListEmailTemplates200Response**](../Model/ListEmailTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmails()`

```php
listEmails($document_id, $to, $status, $kind, $limit, $cursor): \Docustay\Model\ListEmails200Response
```

The log of email about your documents

Every email sent about a document, to a person named on it: kind, subject, status (sent, delivered, bounced, complained, failed, paused). Filter by `documentId`, `to`, `status`, `kind`. No bodies, no links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$to = 'to_example'; // string
$status = 'status_example'; // string
$kind = 'kind_example'; // string
$limit = 56; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->listEmails($document_id, $to, $status, $kind, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **kind** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Docustay\Model\ListEmails200Response**](../Model/ListEmails200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewEmailTemplate()`

```php
previewEmailTemplate($kind, $email_wording): array<string,mixed>
```

Preview an email with made-up names

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = invitation; // string | invitation, reminder, completed, declined, voided, expired, code or receipt
$email_wording = new \Docustay\Model\EmailWording(); // \Docustay\Model\EmailWording

try {
    $result = $apiInstance->previewEmailTemplate($kind, $email_wording);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->previewEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kind** | **string**| invitation, reminder, completed, declined, voided, expired, code or receipt | |
| **email_wording** | [**\Docustay\Model\EmailWording**](../Model/EmailWording.md)|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetEmailTemplate()`

```php
resetEmailTemplate($kind, $locale): array<string,mixed>
```

Back to the standard wording

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = invitation; // string | invitation, reminder, completed, declined, voided, expired, code or receipt
$locale = 'locale_example'; // string

try {
    $result = $apiInstance->resetEmailTemplate($kind, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->resetEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kind** | **string**| invitation, reminder, completed, declined, voided, expired, code or receipt | |
| **locale** | **string**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveEmailTemplate()`

```php
saveEmailTemplate($kind, $email_wording): array<string,mixed>
```

Set the wording of one email

Variables look like `{{document.title}}`; each message type accepts only its own (see GET). A blank field means the standard wording.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = invitation; // string | invitation, reminder, completed, declined, voided, expired, code or receipt
$email_wording = new \Docustay\Model\EmailWording(); // \Docustay\Model\EmailWording

try {
    $result = $apiInstance->saveEmailTemplate($kind, $email_wording);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->saveEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kind** | **string**| invitation, reminder, completed, declined, voided, expired, code or receipt | |
| **email_wording** | [**\Docustay\Model\EmailWording**](../Model/EmailWording.md)|  | |

### Return type

**array<string,mixed>**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
