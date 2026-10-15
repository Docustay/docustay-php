# Docustay\FormsApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getForm()**](FormsApi.md#getForm) | **GET** /api/v1/forms/{id} | Get a form |
| [**listFormResponses()**](FormsApi.md#listFormResponses) | **GET** /api/v1/forms/{id}/responses | List a form&#39;s responses |
| [**listFormTemplates()**](FormsApi.md#listFormTemplates) | **GET** /api/v1/forms/templates | List form templates |
| [**listForms()**](FormsApi.md#listForms) | **GET** /api/v1/forms | List forms |
| [**publishForm()**](FormsApi.md#publishForm) | **POST** /api/v1/forms/publish | Publish a form |
| [**setFormOpen()**](FormsApi.md#setFormOpen) | **POST** /api/v1/forms/{id}/open | Open or close a form |
| [**unpublishForm()**](FormsApi.md#unpublishForm) | **POST** /api/v1/forms/{id}/unpublish | Unpublish a form |


## `getForm()`

```php
getForm($id): mixed
```

Get a form

One form: its link (`/f/<workspace>/<slug>`), settings, response count and whether it is open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `listFormResponses()`

```php
listFormResponses($id, $limit, $offset): mixed
```

List a form's responses

Newest first. Each response is a document: its id opens it with GET /api/v1/documents/{id}. `limit` is 1 to 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$offset = 56; // int

try {
    $result = $apiInstance->listFormResponses($id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->listFormResponses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |

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

## `listFormTemplates()`

```php
listFormTemplates(): mixed
```

List form templates

The built-in form templates (the thirty from the template library) and your own: name, summary, who it is for, whether a team member counter-signs, and its default Publish settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listFormTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->listFormTemplates: ', $e->getMessage(), PHP_EOL;
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

## `listForms()`

```php
listForms(): mixed
```

List forms

Every form template in the workspace: its link name, whether it is open, its response count and whether it has closed (a closing date or a response limit).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listForms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->listForms: ', $e->getMessage(), PHP_EOL;
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

## `publishForm()`

```php
publishForm($publish_form_request): mixed
```

Publish a form

Gives a form template its public link and settings (or changes them). `slug` is 4 to 60 letters, numbers and dashes. The template must be approved and have one person who fills it in, plus at most one team member who counter-signs (`settings.counterSign`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publish_form_request = new \Docustay\Model\PublishFormRequest(); // \Docustay\Model\PublishFormRequest

try {
    $result = $apiInstance->publishForm($publish_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->publishForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publish_form_request** | [**\Docustay\Model\PublishFormRequest**](../Model/PublishFormRequest.md)|  | |

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

## `setFormOpen()`

```php
setFormOpen($id, $set_form_open_request): mixed
```

Open or close a form

`open: false` keeps the link but says the form is not taking responses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$set_form_open_request = new \Docustay\Model\SetFormOpenRequest(); // \Docustay\Model\SetFormOpenRequest

try {
    $result = $apiInstance->setFormOpen($id, $set_form_open_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->setFormOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **set_form_open_request** | [**\Docustay\Model\SetFormOpenRequest**](../Model/SetFormOpenRequest.md)|  | |

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

## `unpublishForm()`

```php
unpublishForm($id): mixed
```

Unpublish a form

The link stops working. The form template, its settings and every response are kept; publish it again at any time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->unpublishForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->unpublishForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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
