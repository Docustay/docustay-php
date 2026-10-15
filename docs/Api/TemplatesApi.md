# Docustay\TemplatesApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTemplateFromFile()**](TemplatesApi.md#createTemplateFromFile) | **POST** /api/v1/templates/file | Make a template from a file with text tags |
| [**createTemplateFromHtml()**](TemplatesApi.md#createTemplateFromHtml) | **POST** /api/v1/templates/html | Make a template from HTML with text tags |
| [**createTemplateFromSource()**](TemplatesApi.md#createTemplateFromSource) | **POST** /api/v1/templates/source | Make a template from a document source |
| [**customizeLibraryTemplate()**](TemplatesApi.md#customizeLibraryTemplate) | **POST** /api/v1/templates/library/{slug}/customize | Customize a built-in template |
| [**draftFromLibraryTemplate()**](TemplatesApi.md#draftFromLibraryTemplate) | **POST** /api/v1/templates/library/{slug}/documents | Make a draft from a built-in template |
| [**getLibraryTemplate()**](TemplatesApi.md#getLibraryTemplate) | **GET** /api/v1/templates/library/{slug} | One built-in template |
| [**getTemplate()**](TemplatesApi.md#getTemplate) | **GET** /api/v1/templates/{id} | One template and its seats |
| [**listLibraryTemplates()**](TemplatesApi.md#listLibraryTemplates) | **GET** /api/v1/templates/library | List the built-in templates |
| [**setTemplateDefaults()**](TemplatesApi.md#setTemplateDefaults) | **POST** /api/v1/templates/{id}/defaults | Set what a document made from a template starts with |
| [**useTemplate()**](TemplatesApi.md#useTemplate) | **POST** /api/v1/templates/{id}/documents | Use a written template for people |


## `createTemplateFromFile()`

```php
createTemplateFromFile($file_template_request): \Docustay\Model\TemplateMade
```

Make a template from a file with text tags

Reads a PDF file, places a field wherever a text tag is written in it, and keeps the result as a template. Needs an `Idempotency-Key` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_template_request = new \Docustay\Model\FileTemplateRequest(); // \Docustay\Model\FileTemplateRequest

try {
    $result = $apiInstance->createTemplateFromFile($file_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateFromFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_template_request** | [**\Docustay\Model\FileTemplateRequest**](../Model/FileTemplateRequest.md)|  | |

### Return type

[**\Docustay\Model\TemplateMade**](../Model/TemplateMade.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplateFromHtml()`

```php
createTemplateFromHtml($html_template_request): \Docustay\Model\TemplateMade
```

Make a template from HTML with text tags

Prints your HTML to a PDF and places a field wherever a text tag sits, then keeps the result as a template you can send with `POST /api/v1/documents/send`. Needs an `Idempotency-Key` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$html_template_request = new \Docustay\Model\HtmlTemplateRequest(); // \Docustay\Model\HtmlTemplateRequest

try {
    $result = $apiInstance->createTemplateFromHtml($html_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateFromHtml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **html_template_request** | [**\Docustay\Model\HtmlTemplateRequest**](../Model/HtmlTemplateRequest.md)|  | |

### Return type

[**\Docustay\Model\TemplateMade**](../Model/TemplateMade.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplateFromSource()`

```php
createTemplateFromSource($create_template_from_source_request): \Docustay\Model\CreateTemplateFromSource201Response
```

Make a template from a document source

Keeps a document written in the shared editor's format as a template (profile `typeset` by default). Needs an `Idempotency-Key` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_from_source_request = new \Docustay\Model\CreateTemplateFromSourceRequest(); // \Docustay\Model\CreateTemplateFromSourceRequest

try {
    $result = $apiInstance->createTemplateFromSource($create_template_from_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateFromSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_template_from_source_request** | [**\Docustay\Model\CreateTemplateFromSourceRequest**](../Model/CreateTemplateFromSourceRequest.md)|  | |

### Return type

[**\Docustay\Model\CreateTemplateFromSource201Response**](../Model/CreateTemplateFromSource201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customizeLibraryTemplate()`

```php
customizeLibraryTemplate($slug, $customize_library_template_request): mixed
```

Customize a built-in template

Your own editable copy of the built-in, as a new template. It counts toward the Free plan's monthly new-template limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$customize_library_template_request = new \Docustay\Model\CustomizeLibraryTemplateRequest(); // \Docustay\Model\CustomizeLibraryTemplateRequest

try {
    $result = $apiInstance->customizeLibraryTemplate($slug, $customize_library_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->customizeLibraryTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**|  | |
| **customize_library_template_request** | [**\Docustay\Model\CustomizeLibraryTemplateRequest**](../Model/CustomizeLibraryTemplateRequest.md)|  | [optional] |

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

## `draftFromLibraryTemplate()`

```php
draftFromLibraryTemplate($slug, $draft_from_library_template_request): mixed
```

Make a draft from a built-in template

A new draft made straight from the built-in (nothing is copied into your templates, so it does not count toward the monthly new-template limit). Add the people and send it as any draft; it counts toward the month's documents when it is sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$draft_from_library_template_request = new \Docustay\Model\DraftFromLibraryTemplateRequest(); // \Docustay\Model\DraftFromLibraryTemplateRequest

try {
    $result = $apiInstance->draftFromLibraryTemplate($slug, $draft_from_library_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->draftFromLibraryTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**|  | |
| **draft_from_library_template_request** | [**\Docustay\Model\DraftFromLibraryTemplateRequest**](../Model/DraftFromLibraryTemplateRequest.md)|  | [optional] |

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

## `getLibraryTemplate()`

```php
getLibraryTemplate($slug): mixed
```

One built-in template

The template's fields (who fills each one) and its guidance: the questions, the facts it needs, the checklist and when not to use it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getLibraryTemplate($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getLibraryTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**|  | |

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

## `getTemplate()`

```php
getTemplate($id): \Docustay\Model\Template
```

One template and its seats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Docustay\Model\Template**](../Model/Template.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLibraryTemplates()`

```php
listLibraryTemplates($kind): mixed
```

List the built-in templates

The built-in Document templates (`kind=document`) and Form templates (`kind=form`): title, summary, seats, field counts and the questions its guidance asks. `templateId` is your workspace's copy once it has been used. Empty when the workspace hides the library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string

try {
    $result = $apiInstance->listLibraryTemplates($kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listLibraryTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kind** | **string**|  | [optional] |

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

## `setTemplateDefaults()`

```php
setTemplateDefaults($id, $set_template_defaults_request): \Docustay\Model\SetTemplateDefaults200Response
```

Set what a document made from a template starts with

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$set_template_defaults_request = new \Docustay\Model\SetTemplateDefaultsRequest(); // \Docustay\Model\SetTemplateDefaultsRequest

try {
    $result = $apiInstance->setTemplateDefaults($id, $set_template_defaults_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->setTemplateDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **set_template_defaults_request** | [**\Docustay\Model\SetTemplateDefaultsRequest**](../Model/SetTemplateDefaultsRequest.md)|  | |

### Return type

[**\Docustay\Model\SetTemplateDefaults200Response**](../Model/SetTemplateDefaults200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `useTemplate()`

```php
useTemplate($id, $use_template_request): \Docustay\Model\DocumentMade
```

Use a written template for people

Makes a document from a template made with `POST /api/v1/templates/source`: the people, the template's questions answered in `variableValues` (see `GET /api/v1/templates/{id}`), the template's own defaults first. A draft unless `sendNow`. Needs an `Idempotency-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docustay\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$use_template_request = new \Docustay\Model\UseTemplateRequest(); // \Docustay\Model\UseTemplateRequest

try {
    $result = $apiInstance->useTemplate($id, $use_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->useTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **use_template_request** | [**\Docustay\Model\UseTemplateRequest**](../Model/UseTemplateRequest.md)|  | |

### Return type

[**\Docustay\Model\DocumentMade**](../Model/DocumentMade.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
