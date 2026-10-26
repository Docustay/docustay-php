# Docustay\AccountApi

All URIs are relative to https://app.docustay.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiUsage()**](AccountApi.md#aiUsage) | **GET** /api/v1/ai/usage | AI drafts used against your plan |
| [**paymentsStatus()**](AccountApi.md#paymentsStatus) | **GET** /api/v1/payments/status | Is Stripe ready to take a payment? |
| [**preflight()**](AccountApi.md#preflight) | **POST** /api/v1/preflight | Ask what an action would do to your plan, before doing it |
| [**usage()**](AccountApi.md#usage) | **GET** /api/v1/usage | Documents, templates and emails used against your plan |


## `aiUsage()`

```php
aiUsage(): \Docustay\Model\AiUsage
```

AI drafts used against your plan

The AI allowance for the current period: drafts included, used and remaining, when it resets, and the split by kind of work. `mode` is `own_key` (you bring your own provider key, so nothing is metered) or `unmetered` (self-hosted).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->aiUsage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->aiUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Docustay\Model\AiUsage**](../Model/AiUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsStatus()`

```php
paymentsStatus(): \Docustay\Model\PaymentsStatus200Response
```

Is Stripe ready to take a payment?

`connected` (details submitted, charges on, nothing due), `needs_attention` (Stripe still needs information) or `not_connected`. A document with a payment field can only be sent when this says `connected`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->paymentsStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->paymentsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Docustay\Model\PaymentsStatus200Response**](../Model/PaymentsStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preflight()`

```php
preflight($preflight_request): \Docustay\Model\PreflightAnswer
```

Ask what an action would do to your plan, before doing it

Answers, for one action, whether it is allowed (`allowed`), what it costs this time in whole cents (`cost.minor`, 0 inside the allowance; for `invite_person` it is a monthly amount, `cost.prorated`), where the meter stands and where it will stand (`meter`, `afterThis`), how loud the moment is (`severity`: `none`, `info` from 50 percent of the meter, `warn` from 80, `limit` at 100 while still allowed, `blocked` when the action would be refused), the stable refusal code the action would carry (`reason`, the same codes the refusals use: `plan_document_limit`, `plan_people_limit`, `plan_template_limit`, `plan_pro_required`, `budget_reached`, `ai_limit_credits`, `too_big`), the options that would let you go on with their prices (`options`, cheapest first) and one plain sentence (`message`). Every number is read from the one price list and your workspace's own counts; nothing is changed. The refusals the other routes return carry the same `options` and `severity` in `error.detail`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preflight_request = {"action":"send_document","documents":1,"people":1,"recipients":["string"],"bytes":0,"item":"string"}; // \Docustay\Model\PreflightRequest

try {
    $result = $apiInstance->preflight($preflight_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->preflight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preflight_request** | [**\Docustay\Model\PreflightRequest**](../Model/PreflightRequest.md)|  | |

### Return type

[**\Docustay\Model\PreflightAnswer**](../Model/PreflightAnswer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usage()`

```php
usage(): \Docustay\Model\Usage
```

Documents, templates and emails used against your plan

Documents sent this period, AI drafts, new templates made this period and emails sent today, with the plan's limits, plus what the period costs so far on a plan with per-unit prices (`billing`). The period is the billing period on Pay as you go, Pro and Lifetime (`periodStart` to `periodEnd`, UTC; everything resets on `periodEnd`) and the UTC calendar month on Free. `limit` is null when the plan has no limit (Pro has no template limit; a self-hosted install has no limits).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));

$apiInstance = new Docustay\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Docustay\Model\Usage**](../Model/Usage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
