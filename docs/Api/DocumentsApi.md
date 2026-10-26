# Docustay\DocumentsApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**auditLogCsv()**](DocumentsApi.md#auditLogCsv) | **GET** /api/v1/documents/{id}/audit-log.csv | The document&#39;s audit log as CSV |
| [**cancelAiJob()**](DocumentsApi.md#cancelAiJob) | **POST** /api/v1/documents/ai/jobs/{id}/cancel | Cancel an AI job |
| [**checkDocument()**](DocumentsApi.md#checkDocument) | **POST** /api/v1/documents/check | Check a document&#39;s words before making it |
| [**createDocument()**](DocumentsApi.md#createDocument) | **POST** /api/v1/documents | Make a document from words and people |
| [**deleteDraft()**](DocumentsApi.md#deleteDraft) | **DELETE** /api/v1/documents/{id} | Delete a draft that was never sent |
| [**detectFields()**](DocumentsApi.md#detectFields) | **POST** /api/v1/documents/detect-fields | Find the fields on a PDF |
| [**downloadSignedPdf()**](DocumentsApi.md#downloadSignedPdf) | **GET** /api/v1/documents/{id}/signed.pdf | Download the signed copy |
| [**draftWithAi()**](DocumentsApi.md#draftWithAi) | **POST** /api/v1/documents/ai/draft | Ask for an AI-written draft |
| [**editWithAi()**](DocumentsApi.md#editWithAi) | **POST** /api/v1/documents/ai/edit | Ask the assistant to change a document |
| [**embedSession()**](DocumentsApi.md#embedSession) | **POST** /api/v1/documents/{id}/embed-session | Start an embedded signing session for a seat |
| [**getAiDraft()**](DocumentsApi.md#getAiDraft) | **GET** /api/v1/documents/ai/jobs/{id} | Read an AI draft job |
| [**getDocument()**](DocumentsApi.md#getDocument) | **GET** /api/v1/documents/{id} | One document and where each person is |
| [**getDraftSource()**](DocumentsApi.md#getDraftSource) | **GET** /api/v1/documents/{id}/source | The words, people and choices of a draft |
| [**getWizard()**](DocumentsApi.md#getWizard) | **GET** /api/v1/ai/wizard | The wizard&#39;s questions |
| [**listDocuments()**](DocumentsApi.md#listDocuments) | **GET** /api/v1/documents | List documents |
| [**listTemplates()**](DocumentsApi.md#listTemplates) | **GET** /api/v1/documents/templates | Templates you can send |
| [**remind()**](DocumentsApi.md#remind) | **POST** /api/v1/documents/{id}/remind | Remind the people who still have to sign |
| [**reviseDocument()**](DocumentsApi.md#reviseDocument) | **POST** /api/v1/documents/{id}/revise | Change the words of a draft |
| [**search()**](DocumentsApi.md#search) | **GET** /api/v1/search | Search documents, templates and people |
| [**sendDocument()**](DocumentsApi.md#sendDocument) | **POST** /api/v1/documents/send | Send a template to people to sign |
| [**sendDraft()**](DocumentsApi.md#sendDraft) | **POST** /api/v1/documents/{id}/send | Send a draft |
| [**testSign()**](DocumentsApi.md#testSign) | **POST** /api/v1/documents/{id}/test-sign | Sign a test document (test mode only) |
| [**voidDocument()**](DocumentsApi.md#voidDocument) | **POST** /api/v1/documents/{id}/void | Void a document that is still out for signature |


## `auditLogCsv()`

```php
auditLogCsv($id): string
```

The document's audit log as CSV

The document's audit log as CSV.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->auditLogCsv($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->auditLogCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAiJob()`

```php
cancelAiJob($id): \Docustay\Model\AiDraftJob
```

Cancel an AI job

Cancel an AI job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->cancelAiJob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->cancelAiJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Docustay\Model\AiDraftJob**](../Model/AiDraftJob.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDocument()`

```php
checkDocument($check_document_request): \Docustay\Model\CheckDocument200Response
```

Check a document's words before making it

Check a document's words before making it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_document_request = {"source":{},"facts":{},"people":[{"externalId":"contract-2026-0042","metadata":{"crmDealId":"D-1042"},"name":"string","email":"person@example.com","role":"string","action":"signer","order":1}],"variableValues":{},"requireSignature":false,"forTemplate":false}; // \Docustay\Model\CheckDocumentRequest

try {
    $result = $apiInstance->checkDocument($check_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->checkDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_document_request** | [**\Docustay\Model\CheckDocumentRequest**](../Model/CheckDocumentRequest.md)|  | |

### Return type

[**\Docustay\Model\CheckDocument200Response**](../Model/CheckDocument200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($idempotency_key, $create_document_request): \Docustay\Model\DocumentMade
```

Make a document from words and people

People first: each person has a name, an email and (optionally) a role word from the text. The document is left as a **draft** unless `sendNow` is true. Needs an `Idempotency-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice.
$create_document_request = {"email":{"subject":"string","message":"string","replyTo":"person@example.com","senderName":"string"},"metadata":{"crmDealId":"D-1042"},"externalId":"contract-2026-0042","title":"string","source":{},"people":[{"externalId":"contract-2026-0042","metadata":{"crmDealId":"D-1042"},"name":"string","email":"person@example.com","role":"string","action":"signer","order":1}],"facts":{},"variableValues":{},"paper":"letter","send":{"replyTo":"person@example.com","senderName":"string","subject":"string","message":"string","expiryDays":0,"reminderDays":[1],"signingOrder":"any","internalNote":"string","requireDeclineReason":false},"description":"string","sendNow":false}; // \Docustay\Model\CreateDocumentRequest

try {
    $result = $apiInstance->createDocument($idempotency_key, $create_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice. | |
| **create_document_request** | [**\Docustay\Model\CreateDocumentRequest**](../Model/CreateDocumentRequest.md)|  | |

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

## `deleteDraft()`

```php
deleteDraft($id): \Docustay\Model\DeleteDraft200Response
```

Delete a draft that was never sent

Removes a draft and its files. A document that was sent cannot be deleted: void it instead (`POST /api/v1/documents/{id}/void`), which keeps its record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->deleteDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Docustay\Model\DeleteDraft200Response**](../Model/DeleteDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detectFields()`

```php
detectFields($detect_fields_request): \Docustay\Model\DetectFieldsResult
```

Find the fields on a PDF

Looks at a PDF and returns the signature, initials, date, text and tick-box fields a person would place, with the page, the box (fractions of the page, origin top left), how sure it is, where it came from and which signer it belongs to. Stores nothing and sends nothing; pass the result on when you create a template or a document, or ask for `fields: \"auto\"` when you upload one. Free for everyone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$detect_fields_request = {"fileName":"string","file":"string","minConfidence":0,"ocr":false}; // \Docustay\Model\DetectFieldsRequest

try {
    $result = $apiInstance->detectFields($detect_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->detectFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **detect_fields_request** | [**\Docustay\Model\DetectFieldsRequest**](../Model/DetectFieldsRequest.md)|  | |

### Return type

[**\Docustay\Model\DetectFieldsResult**](../Model/DetectFieldsResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadSignedPdf()`

```php
downloadSignedPdf($id): \SplFileObject
```

Download the signed copy

Download the signed copy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->downloadSignedPdf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->downloadSignedPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `draftWithAi()`

```php
draftWithAi($draft_with_ai_request): \Docustay\Model\DraftWithAi202Response
```

Ask for an AI-written draft

Starts a draft and answers at once with a job id; poll `GET /api/v1/documents/ai/jobs/{id}`. Send an `Idempotency-Key` header to make a retry safe: the same key and body answer the first job and spend no second draft. The draft is a suggestion for a person to read; nothing is saved or sent. Refused plainly when AI drafting is switched off for the workspace or a limit is reached.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$draft_with_ai_request = {"prompt":"string","brief":{"type":"string","kind":"string","answers":{},"final":"string","payment":{"collect":true,"amount":"1500","currency":"usd","payer_role":"string","description":"string","schedule_note":"string"}},"mode":"template"}; // \Docustay\Model\DraftWithAiRequest

try {
    $result = $apiInstance->draftWithAi($draft_with_ai_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->draftWithAi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_with_ai_request** | [**\Docustay\Model\DraftWithAiRequest**](../Model/DraftWithAiRequest.md)|  | |

### Return type

[**\Docustay\Model\DraftWithAi202Response**](../Model/DraftWithAi202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editWithAi()`

```php
editWithAi($edit_with_ai_request): \Docustay\Model\DraftWithAi202Response
```

Ask the assistant to change a document

Starts an edit job and answers at once; poll `GET /api/v1/documents/ai/jobs/{id}`. The answer is a list of **proposed changes** (`patches.applied`); nothing is changed until you apply the ones you accept with your own copy of the source. If you pass the template's questions in `variables`, `patches.values` carries proposed answers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edit_with_ai_request = {"request":"string","source":{},"mode":"template","variables":[{"key":"string","label":"string","kind":"text"}]}; // \Docustay\Model\EditWithAiRequest

try {
    $result = $apiInstance->editWithAi($edit_with_ai_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->editWithAi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edit_with_ai_request** | [**\Docustay\Model\EditWithAiRequest**](../Model/EditWithAiRequest.md)|  | |

### Return type

[**\Docustay\Model\DraftWithAi202Response**](../Model/DraftWithAi202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `embedSession()`

```php
embedSession($id, $embed_session_request): \Docustay\Model\EmbedSession200Response
```

Start an embedded signing session for a seat

For a seat that was sent in `embedded`. Returns a link that works for one hour and is meant for an iframe or the `<docustay-sign>` element on one of your allowed websites. It is the only way a key can put someone in front of a signing form, and only for seats you marked embedded yourself. No `Idempotency-Key` is needed: each call starts a fresh one-hour session, and the last few stay open so a page that loads twice keeps working.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$embed_session_request = {"seat":"signer_1","origin":"https://app.example.com"}; // \Docustay\Model\EmbedSessionRequest

try {
    $result = $apiInstance->embedSession($id, $embed_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->embedSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **embed_session_request** | [**\Docustay\Model\EmbedSessionRequest**](../Model/EmbedSessionRequest.md)|  | |

### Return type

[**\Docustay\Model\EmbedSession200Response**](../Model/EmbedSession200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAiDraft()`

```php
getAiDraft($id): \Docustay\Model\AiDraftJob
```

Read an AI draft job

Read an AI draft job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->getAiDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAiDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Docustay\Model\AiDraftJob**](../Model/AiDraftJob.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($id): \Docustay\Model\Document
```

One document and where each person is

One document and where each person is.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->getDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Docustay\Model\Document**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDraftSource()`

```php
getDraftSource($id): \Docustay\Model\GetDraftSource200Response
```

The words, people and choices of a draft

The words, people and choices of a draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string

try {
    $result = $apiInstance->getDraftSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDraftSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Docustay\Model\GetDraftSource200Response**](../Model/GetDraftSource200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWizard()`

```php
getWizard(): array<string,mixed>
```

The wizard's questions

The questions the screen's Describe wizard asks, so an integration asks the same ones and sends the answers as `brief` to `POST /api/v1/documents/ai/draft`. Includes the payment questions and the currencies offered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWizard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getWizard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `listDocuments()`

```php
listDocuments($state, $limit, $cursor, $external_id): \Docustay\Model\ListDocuments200Response
```

List documents

Filter by your own reference: `externalId=…`, and `metadata[key]=value` (repeat for more keys; a document must match all).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'state_example'; // string | Only documents in this state; any other value is refused.
$limit = 56; // int
$cursor = 'cursor_example'; // string
$external_id = 'external_id_example'; // string | Only documents with this `externalId`.

try {
    $result = $apiInstance->listDocuments($state, $limit, $cursor, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->listDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | **string**| Only documents in this state; any other value is refused. | [optional] |
| **limit** | **int**|  | [optional] |
| **cursor** | **string**|  | [optional] |
| **external_id** | **string**| Only documents with this &#x60;externalId&#x60;. | [optional] |

### Return type

[**\Docustay\Model\ListDocuments200Response**](../Model/ListDocuments200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates(): \Docustay\Model\ListTemplates200Response
```

Templates you can send

Templates you can send.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Docustay\Model\ListTemplates200Response**](../Model/ListTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remind()`

```php
remind($id, $remind_request): \Docustay\Model\Remind200Response
```

Remind the people who still have to sign

Remind the people who still have to sign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$remind_request = {"seat":"string"}; // \Docustay\Model\RemindRequest

try {
    $result = $apiInstance->remind($id, $remind_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->remind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **remind_request** | [**\Docustay\Model\RemindRequest**](../Model/RemindRequest.md)|  | [optional] |

### Return type

[**\Docustay\Model\Remind200Response**](../Model/Remind200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviseDocument()`

```php
reviseDocument($id, $idempotency_key, $revise_document_request): \Docustay\Model\ReviseDocument201Response
```

Change the words of a draft

A draft is never edited in place: the new words are printed into a NEW draft that takes the people and choices, and the old draft is deleted. **The id changes** (use `id` in the answer). Needs an `Idempotency-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$idempotency_key = 'idempotency_key_example'; // string | A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice.
$revise_document_request = {"source":{},"facts":{},"variableValues":{},"roleMap":{}}; // \Docustay\Model\ReviseDocumentRequest

try {
    $result = $apiInstance->reviseDocument($id, $idempotency_key, $revise_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->reviseDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **idempotency_key** | **string**| A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice. | |
| **revise_document_request** | [**\Docustay\Model\ReviseDocumentRequest**](../Model/ReviseDocumentRequest.md)|  | |

### Return type

[**\Docustay\Model\ReviseDocument201Response**](../Model/ReviseDocument201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($q, $per): mixed
```

Search documents, templates and people

The same search as ⌘K in the app: documents by title or signer, templates and people, best first, grouped. `per` is how many of each kind (1 to 20, default 6).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string
$per = 56; // int

try {
    $result = $apiInstance->search($q, $per);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**|  | |
| **per** | **int**|  | [optional] |

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

## `sendDocument()`

```php
sendDocument($idempotency_key, $send_request): \Docustay\Model\SendDocument201Response
```

Send a template to people to sign

Makes a document from the template, puts each person on their seat and sends it. Needs an `Idempotency-Key` header (8–200 characters): a retry with the same key and body does not send again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice.
$send_request = {"templateId":"6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e","email":{"subject":"string","message":"string","replyTo":"person@example.com","senderName":"string"},"metadata":{"crmDealId":"D-1042"},"externalId":"contract-2026-0042","title":"string","message":"string","subject":"string","expiryDays":1,"signingOrder":"any","values":{"effective_date":"2026-11-01"},"embedded":["string"],"parties":[{"seat":"string","name":"string","email":"person@example.com","externalId":"contract-2026-0042","metadata":{"crmDealId":"D-1042"}}]}; // \Docustay\Model\SendRequest

try {
    $result = $apiInstance->sendDocument($idempotency_key, $send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice. | |
| **send_request** | [**\Docustay\Model\SendRequest**](../Model/SendRequest.md)|  | |

### Return type

[**\Docustay\Model\SendDocument201Response**](../Model/SendDocument201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendDraft()`

```php
sendDraft($id, $idempotency_key, $send_draft_request): \Docustay\Model\SendDraft201Response
```

Send a draft

Sends a draft made with `POST /api/v1/documents`. The same checks as the screen's Send; a payment field needs Stripe connected. Needs an `Idempotency-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$idempotency_key = 'idempotency_key_example'; // string | A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice.
$send_draft_request = {"values":{"effective_date":"2026-11-01"}}; // \Docustay\Model\SendDraftRequest

try {
    $result = $apiInstance->sendDraft($id, $idempotency_key, $send_draft_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **idempotency_key** | **string**| A unique value for this request (8–200 characters, for example a UUID). Repeating the request with the same key and body returns the first answer instead of doing it twice. | |
| **send_draft_request** | [**\Docustay\Model\SendDraftRequest**](../Model/SendDraftRequest.md)|  | [optional] |

### Return type

[**\Docustay\Model\SendDraft201Response**](../Model/SendDraft201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testSign()`

```php
testSign($id, $test_sign_request): \Docustay\Model\TestSign200Response
```

Sign a test document (test mode only)

Signs one seat of a **test** document with sample answers, through the same code a person's signature uses: consent, signing order, the audit trail and your webhooks all happen. Only a test key (`dsk_test_…`) may call it, and only on a test document; a live key gets `403`. A seat with a payment field cannot be test-signed: pay it with a Stripe test card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$test_sign_request = {"seat":"signer_1","decline":false,"reason":"string"}; // \Docustay\Model\TestSignRequest

try {
    $result = $apiInstance->testSign($id, $test_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->testSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **test_sign_request** | [**\Docustay\Model\TestSignRequest**](../Model/TestSignRequest.md)|  | |

### Return type

[**\Docustay\Model\TestSign200Response**](../Model/TestSign200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidDocument()`

```php
voidDocument($id, $void_document_request): \Docustay\Model\VoidDocument200Response
```

Void a document that is still out for signature

Void a document that is still out for signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6f1c1f0e-7a0c-4d1d-9b5e-2f0a7b1c3d4e; // string
$void_document_request = {"reason":"string"}; // \Docustay\Model\VoidDocumentRequest

try {
    $result = $apiInstance->voidDocument($id, $void_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->voidDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **void_document_request** | [**\Docustay\Model\VoidDocumentRequest**](../Model/VoidDocumentRequest.md)|  | [optional] |

### Return type

[**\Docustay\Model\VoidDocument200Response**](../Model/VoidDocument200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
