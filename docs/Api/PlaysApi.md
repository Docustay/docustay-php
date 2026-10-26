# Docustay\PlaysApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**answerDraft()**](PlaysApi.md#answerDraft) | **POST** /api/v1/drafts/{draftRef}/answers | Answer a template&#39;s questions |
| [**archivePlay()**](PlaysApi.md#archivePlay) | **DELETE** /api/v1/plays/{name} | Archive a play |
| [**duplicatePlay()**](PlaysApi.md#duplicatePlay) | **POST** /api/v1/plays/{name}/duplicate | Copy a play under a new name |
| [**getPlay()**](PlaysApi.md#getPlay) | **GET** /api/v1/plays/{name} | One play |
| [**listPlaybooks()**](PlaysApi.md#listPlaybooks) | **GET** /api/v1/playbooks | List playbooks (packs) |
| [**listPlays()**](PlaysApi.md#listPlays) | **GET** /api/v1/plays | List plays |
| [**publishPlay()**](PlaysApi.md#publishPlay) | **POST** /api/v1/plays/{name}/publish | Publish a play version |
| [**savePlay()**](PlaysApi.md#savePlay) | **POST** /api/v1/plays | Save a play (a new version) |
| [**savePlaybook()**](PlaysApi.md#savePlaybook) | **POST** /api/v1/playbooks | Save a playbook (pack) |
| [**setPlaybookOn()**](PlaysApi.md#setPlaybookOn) | **POST** /api/v1/playbooks/{name}/enable | Switch a pack on or off |
| [**startDraft()**](PlaysApi.md#startDraft) | **POST** /api/v1/drafts | Start a draft from a template |
| [**testPlay()**](PlaysApi.md#testPlay) | **POST** /api/v1/plays/test | Check a play without saving it |


## `answerDraft()`

```php
answerDraft($draft_ref, $answer_draft_request): mixed
```

Answer a template's questions

Answer a template's questions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$draft_ref = 'draft_ref_example'; // string
$answer_draft_request = {"answers":{},"values":{},"useDefaults":false}; // \Docustay\Model\AnswerDraftRequest

try {
    $result = $apiInstance->answerDraft($draft_ref, $answer_draft_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->answerDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_ref** | **string**|  | |
| **answer_draft_request** | [**\Docustay\Model\AnswerDraftRequest**](../Model/AnswerDraftRequest.md)|  | |

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

## `archivePlay()`

```php
archivePlay($name): mixed
```

Archive a play

Archive a play.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->archivePlay($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->archivePlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

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

## `duplicatePlay()`

```php
duplicatePlay($name, $duplicate_play_request): mixed
```

Copy a play under a new name

Copy a play under a new name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$duplicate_play_request = {"as":"string"}; // \Docustay\Model\DuplicatePlayRequest

try {
    $result = $apiInstance->duplicatePlay($name, $duplicate_play_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->duplicatePlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **duplicate_play_request** | [**\Docustay\Model\DuplicatePlayRequest**](../Model/DuplicatePlayRequest.md)|  | |

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

## `getPlay()`

```php
getPlay($name): mixed
```

One play

One play.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->getPlay($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->getPlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

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

## `listPlaybooks()`

```php
listPlaybooks(): mixed
```

List playbooks (packs)

Packs: named bundles of skills and templates for one job. The built-in packs first, then your own; `enabled` says whether it is switched on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPlaybooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->listPlaybooks: ', $e->getMessage(), PHP_EOL;
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

## `listPlays()`

```php
listPlays($kind, $category): mixed
```

List plays

The built-in plays and your published ones: name, one-line description, kind and category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string
$category = 'category_example'; // string

try {
    $result = $apiInstance->listPlays($kind, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->listPlays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kind** | **string**|  | [optional] |
| **category** | **string**|  | [optional] |

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

## `publishPlay()`

```php
publishPlay($name, $publish_play_request): mixed
```

Publish a play version

Publish a play version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$publish_play_request = {"version":1}; // \Docustay\Model\PublishPlayRequest

try {
    $result = $apiInstance->publishPlay($name, $publish_play_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->publishPlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **publish_play_request** | [**\Docustay\Model\PublishPlayRequest**](../Model/PublishPlayRequest.md)|  | |

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

## `savePlay()`

```php
savePlay($save_play_request): mixed
```

Save a play (a new version)

`source` is the play file: Markdown with a block of YAML at the top. Every save is a new immutable version; publish it to use it. Data only: a play cannot add tools, run code, send or take payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_play_request = {"source":"string"}; // \Docustay\Model\SavePlayRequest

try {
    $result = $apiInstance->savePlay($save_play_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->savePlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_play_request** | [**\Docustay\Model\SavePlayRequest**](../Model/SavePlayRequest.md)|  | |

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

## `savePlaybook()`

```php
savePlaybook($save_playbook_request): mixed
```

Save a playbook (pack)

A pack holds at least one skill or template: up to 12 skills and 24 templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_playbook_request = {"name":"string","title":"string","description":"string","plays":["string"],"templates":["string"]}; // \Docustay\Model\SavePlaybookRequest

try {
    $result = $apiInstance->savePlaybook($save_playbook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->savePlaybook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_playbook_request** | [**\Docustay\Model\SavePlaybookRequest**](../Model/SavePlaybookRequest.md)|  | |

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

## `setPlaybookOn()`

```php
setPlaybookOn($name, $set_playbook_on_request): mixed
```

Switch a pack on or off

Switch a pack on or off.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$set_playbook_on_request = {"enabled":false}; // \Docustay\Model\SetPlaybookOnRequest

try {
    $result = $apiInstance->setPlaybookOn($name, $set_playbook_on_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->setPlaybookOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **set_playbook_on_request** | [**\Docustay\Model\SetPlaybookOnRequest**](../Model/SetPlaybookOnRequest.md)|  | |

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

## `startDraft()`

```php
startDraft($start_draft_request): mixed
```

Start a draft from a template

Starts from a built-in Document template and asks its own questions: `status: needs_input` with up to 4 questions (each with 2 to 4 options and a `draftRef`) until the must-ask ones are answered, then `status: draft` with the new draft's id. Nothing is ever sent: a draft is a draft. Answer with `POST /api/v1/drafts/{draftRef}/answers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_draft_request = {"template":"string","title":"string","people":[{"name":"string","email":"person@example.com","role":"string","action":"signer"}],"answers":{},"values":{},"useDefaults":false}; // \Docustay\Model\StartDraftRequest

try {
    $result = $apiInstance->startDraft($start_draft_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->startDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_draft_request** | [**\Docustay\Model\StartDraftRequest**](../Model/StartDraftRequest.md)|  | |

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

## `testPlay()`

```php
testPlay($save_play_request): mixed
```

Check a play without saving it

A dry run: parses the play file, reports every problem, and shows what the picker and the interview would use. Creates nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\PlaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_play_request = {source=string}; // \Docustay\Model\SavePlayRequest

try {
    $result = $apiInstance->testPlay($save_play_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaysApi->testPlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_play_request** | [**\Docustay\Model\SavePlayRequest**](../Model/SavePlayRequest.md)|  | |

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
