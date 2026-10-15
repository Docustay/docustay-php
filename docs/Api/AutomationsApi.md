# Docustay\AutomationsApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAutomations()**](AutomationsApi.md#listAutomations) | **GET** /api/v1/automations | List automations |
| [**setAutomationOn()**](AutomationsApi.md#setAutomationOn) | **POST** /api/v1/automations/{id}/enable | Switch an automation on or off |


## `listAutomations()`

```php
listAutomations(): mixed
```

List automations

Each automation built on the canvas: when it starts (a signed document from a template or form), its steps, whether it is on, how many times it ran and its recent runs. (`GET /api/v1/playbooks` lists packs: bundles of skills and templates.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAutomations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAutomationOn()`

```php
setAutomationOn($id, $set_automation_on_request): mixed
```

Switch an automation on or off

`on: true` switches it on (Pro): from then on, each matching signed document starts a run. `on: false` stops new runs, and a run that is waiting stops when its wait ends, without sending its reminder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$set_automation_on_request = new \Docustay\Model\SetAutomationOnRequest(); // \Docustay\Model\SetAutomationOnRequest

try {
    $result = $apiInstance->setAutomationOn($id, $set_automation_on_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->setAutomationOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **set_automation_on_request** | [**\Docustay\Model\SetAutomationOnRequest**](../Model/SetAutomationOnRequest.md)|  | |

### Return type

**mixed**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
