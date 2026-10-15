# Docustay\ReportsApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**report()**](ReportsApi.md#report) | **GET** /api/v1/reports | Counts of what was sent and completed |


## `report()`

```php
report($from, $to, $team): \Docustay\Model\Report
```

Counts of what was sent and completed

Real documents only — documents made in test mode are never counted. Dates are in the workspace's own time zone; `to` is inclusive; the default window is the last 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 2026-10-01; // string
$to = 2026-10-31; // string
$team = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->report($from, $to, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->report: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**|  | [optional] |
| **to** | **string**|  | [optional] |
| **team** | **string**|  | [optional] |

### Return type

[**\Docustay\Model\Report**](../Model/Report.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
