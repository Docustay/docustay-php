# Docustay\EmbeddingApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**builderSession()**](EmbeddingApi.md#builderSession) | **POST** /api/v1/embedded/builder-session | Start an embedded template builder session |
| [**scribeSession()**](EmbeddingApi.md#scribeSession) | **POST** /api/v1/embedded/scribe-session | Start an embedded Scribe session |


## `builderSession()`

```php
builderSession($builder_session_request): \Docustay\Model\BuilderSession
```

Start an embedded template builder session

Returns a link that works for one hour and is meant for an iframe or the `<docustay-builder>` element on one of your allowed websites. The builder lets the person write a document, drop signature and other fields on it, and save it as a template; the saved template's id comes back to your page in a `saved` event. The link holds a key of its own that can only read and write templates and stops working after an hour. Needs an `Idempotency-Key` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\EmbeddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$builder_session_request = {"origin":"https://app.example.com","name":"string"}; // \Docustay\Model\BuilderSessionRequest

try {
    $result = $apiInstance->builderSession($builder_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddingApi->builderSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **builder_session_request** | [**\Docustay\Model\BuilderSessionRequest**](../Model/BuilderSessionRequest.md)|  | |

### Return type

[**\Docustay\Model\BuilderSession**](../Model/BuilderSession.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scribeSession()`

```php
scribeSession($scribe_session_request): \Docustay\Model\BuilderSession
```

Start an embedded Scribe session

Returns a link that works for one hour and is meant for an iframe or the `<docustay-scribe>` element on one of your allowed websites. The person picks a play, names who signs, answers a few clickable questions and gets a DRAFT; the draft's id comes back to your page in a `drafted` event. The link holds a key of its own that is draft-only (it cannot send: asking to send files an approval a person decides in Docustay), allows 50 drafts a day and stops working after an hour. Needs an `Idempotency-Key` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\EmbeddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scribe_session_request = {"origin":"https://app.example.com","name":"string"}; // \Docustay\Model\ScribeSessionRequest

try {
    $result = $apiInstance->scribeSession($scribe_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddingApi->scribeSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scribe_session_request** | [**\Docustay\Model\ScribeSessionRequest**](../Model/ScribeSessionRequest.md)|  | |

### Return type

[**\Docustay\Model\BuilderSession**](../Model/BuilderSession.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
