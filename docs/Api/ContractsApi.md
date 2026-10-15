# Docustay\ContractsApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listContracts()**](ContractsApi.md#listContracts) | **GET** /api/v1/contracts | List signed contracts with their key dates |
| [**setContractDate()**](ContractsApi.md#setContractDate) | **POST** /api/v1/contracts/{id}/dates | Correct a contract&#39;s key date |


## `listContracts()`

```php
listContracts($q, $limit): mixed
```

List signed contracts with their key dates

Every signed document with the dates read from its boxes at signing — start, end, notice, renewal — and its value, with where each came from (`source`: a box, or a person's correction). Filter with `q` (title or person).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listContracts($q, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->listContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

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

## `setContractDate()`

```php
setContractDate($id, $set_contract_date_request): mixed
```

Correct a contract's key date

Sets one key date (or the value) on a signed document by hand. The signed PDF never changes; the correction is kept as the person's, and renewal reminders follow it. `date` is YYYY-MM-DD; `null` clears it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$set_contract_date_request = new \Docustay\Model\SetContractDateRequest(); // \Docustay\Model\SetContractDateRequest

try {
    $result = $apiInstance->setContractDate($id, $set_contract_date_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->setContractDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **set_contract_date_request** | [**\Docustay\Model\SetContractDateRequest**](../Model/SetContractDateRequest.md)|  | |

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
