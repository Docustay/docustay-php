# Docustay PHP client

Official Docustay API client: send documents for signature and follow them from your own software. https://docustay.app/docs

```
composer require docustay/docustay-php
```

Generated from the published OpenAPI document (https://docustay.app/api/openapi.json): all 77 operations. MIT licence. Source of truth: https://github.com/Docustay/docustay

---


Send documents for signature and follow them, from your own software.

**Authentication.** Send `Authorization: Bearer <key>`. Make keys in Settings → Developers → API keys and give each only the scopes it needs: `accounts:read`, `accounts:write`, `booking:read`, `booking:write`, `documents:read`, `documents:write`, `growth:read`, `growth:write`, `items:read`, `items:write`, `lead:write`, `money:read`, `money:write`, `network:read`, `network:write`, `notifications:read`, `notifications:write`, `people:read`, `people:write`, `platform:read`, `platform:write`, `records:read`, `records:write`, `settings:read`, `settings:write`, `plays:read`, `plays:write`, `drafts:write`, `templates:read`, `templates:write`, `webhooks:read`, `webhooks:write`, `reports:read`, `account:read`, `embedded:write`. A key that starts `dsk_test_` works in **test mode**: documents it sends are practice runs (emailed only to the sender, stamped TEST, never counted or billed), it can only see and act on test documents (any other document answers `404`), and it can sign them itself with `POST /api/v1/documents/{id}/test-sign`. A key can also be limited to a list of addresses, given an expiry, or made **draft-only**.

**Draft-only keys.** A draft-only key can make and edit drafts but cannot send. Asking it to send answers `202` with an `approval`, the document stays a draft, and a person approves or declines in Settings → Developers → Approvals. Keys can also have a daily limit of drafts and sends; past it you get `429`.

**Payments.** A template may contain payment fields (text tag `type=payment` with one of `amount`, `formula`, `price` or `link`). The signer pays on Stripe's hosted page; the money goes to your own connected Stripe account; Docustay's fee is 2% on the Free plan and 0% on Pro, plus Stripe's own fees. The document's `payments` list shows each payment, its receipt and the fee. Card details never reach Docustay.

**Idempotency.** Requests that create a document or a template, or send one, need an `Idempotency-Key` header (8–200 characters). Repeating a request with the same key and body returns the first answer instead of doing it twice.

**Your own reference.** Documents and templates take `externalId` (your id for it) and `metadata` (up to 20 short key/value pairs). List with `externalId=` or `metadata[key]=value` to find them again, and both come back in webhooks.

**Errors.** Every error is `{ \"error\": { \"kind\", \"message\", \"requestId\", \"retryable\" } }`. `kind` is one of `invalid`, `unauthenticated`, `forbidden`, `not_found`, `conflict`, `rate_limited`, `dependency`, `timeout`. Quote the `requestId` to support, or search it in Settings → Developers → API log. **Plan limits** are `403 forbidden` with `error.detail.code`: `plan_document_limit` (the plan's documents this month are used; a form counts the first time it is published, and every signed response counts) or `plan_template_limit` (Free: 5 new templates a month, documents and forms together; a new version of a template you have does not count). Both carry `detail.used`, `detail.limit` and `detail.resetsAt` (the first of next month, UTC). Everything already made keeps working. Pro and self-hosted installs have no template limit.

**Rate limits.** Each key has its own per-minute budget. Every answer carries `RateLimit-Limit`, `RateLimit-Remaining` and `RateLimit-Reset` (seconds); over the budget you get `429` with a `Retry-After` header.

**Versions.** Every answer carries `Docustay-Version`, a date. A change that could break a caller gets a new date and is announced in the changelog before it ships; additions (a new field, a new route) are not breaking and do not change the date.

**Pagination.** Lists take `limit` (1–200) and `cursor`; the answer carries `page.nextCursor` (null on the last page).

**Signing links.** No response contains a signing link or access code, with one exception you control: a seat you send in `embedded` can be given an embedded signing session (`POST /api/v1/documents/{id}/embed-session`), a one-hour link for a frame on a website you listed. A key can start and follow a signature, and put your own signer in front of the form for seats you marked yourself; it cannot sign for anyone.

For more information, please visit [https://docustay.app/contact](https://docustay.app/contact).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/docustay/docustay-php.git"
    }
  ],
  "require": {
    "docustay/docustay-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/docustay-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

## API Endpoints

All URIs are relative to *https://app.docustay.app*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**aiUsage**](docs/Api/AccountApi.md#aiusage) | **GET** /api/v1/ai/usage | AI credits used against your plan
*AccountApi* | [**paymentsStatus**](docs/Api/AccountApi.md#paymentsstatus) | **GET** /api/v1/payments/status | Is Stripe ready to take a payment?
*AccountApi* | [**usage**](docs/Api/AccountApi.md#usage) | **GET** /api/v1/usage | Documents, templates and emails used against your plan
*AutomationsApi* | [**listAutomations**](docs/Api/AutomationsApi.md#listautomations) | **GET** /api/v1/automations | List automations
*AutomationsApi* | [**setAutomationOn**](docs/Api/AutomationsApi.md#setautomationon) | **POST** /api/v1/automations/{id}/enable | Switch an automation on or off
*ContractsApi* | [**listContracts**](docs/Api/ContractsApi.md#listcontracts) | **GET** /api/v1/contracts | List signed contracts with their key dates
*ContractsApi* | [**setContractDate**](docs/Api/ContractsApi.md#setcontractdate) | **POST** /api/v1/contracts/{id}/dates | Correct a contract&#39;s key date
*DocumentsApi* | [**auditLogCsv**](docs/Api/DocumentsApi.md#auditlogcsv) | **GET** /api/v1/documents/{id}/audit-log.csv | The document&#39;s audit log as CSV
*DocumentsApi* | [**cancelAiJob**](docs/Api/DocumentsApi.md#cancelaijob) | **POST** /api/v1/documents/ai/jobs/{id}/cancel | Cancel an AI job
*DocumentsApi* | [**checkDocument**](docs/Api/DocumentsApi.md#checkdocument) | **POST** /api/v1/documents/check | Check a document&#39;s words before making it
*DocumentsApi* | [**createDocument**](docs/Api/DocumentsApi.md#createdocument) | **POST** /api/v1/documents | Make a document from words and people
*DocumentsApi* | [**detectFields**](docs/Api/DocumentsApi.md#detectfields) | **POST** /api/v1/documents/detect-fields | Find the fields on a PDF
*DocumentsApi* | [**downloadSignedPdf**](docs/Api/DocumentsApi.md#downloadsignedpdf) | **GET** /api/v1/documents/{id}/signed.pdf | Download the signed copy
*DocumentsApi* | [**draftWithAi**](docs/Api/DocumentsApi.md#draftwithai) | **POST** /api/v1/documents/ai/draft | Ask for an AI-written draft
*DocumentsApi* | [**editWithAi**](docs/Api/DocumentsApi.md#editwithai) | **POST** /api/v1/documents/ai/edit | Ask the assistant to change a document
*DocumentsApi* | [**embedSession**](docs/Api/DocumentsApi.md#embedsession) | **POST** /api/v1/documents/{id}/embed-session | Start an embedded signing session for a seat
*DocumentsApi* | [**getAiDraft**](docs/Api/DocumentsApi.md#getaidraft) | **GET** /api/v1/documents/ai/jobs/{id} | Read an AI draft job
*DocumentsApi* | [**getDocument**](docs/Api/DocumentsApi.md#getdocument) | **GET** /api/v1/documents/{id} | One document and where each person is
*DocumentsApi* | [**getDraftSource**](docs/Api/DocumentsApi.md#getdraftsource) | **GET** /api/v1/documents/{id}/source | The words, people and choices of a draft
*DocumentsApi* | [**getWizard**](docs/Api/DocumentsApi.md#getwizard) | **GET** /api/v1/ai/wizard | The wizard&#39;s questions
*DocumentsApi* | [**listDocuments**](docs/Api/DocumentsApi.md#listdocuments) | **GET** /api/v1/documents | List documents
*DocumentsApi* | [**listTemplates**](docs/Api/DocumentsApi.md#listtemplates) | **GET** /api/v1/documents/templates | Templates you can send
*DocumentsApi* | [**remind**](docs/Api/DocumentsApi.md#remind) | **POST** /api/v1/documents/{id}/remind | Remind the people who still have to sign
*DocumentsApi* | [**reviseDocument**](docs/Api/DocumentsApi.md#revisedocument) | **POST** /api/v1/documents/{id}/revise | Change the words of a draft
*DocumentsApi* | [**search**](docs/Api/DocumentsApi.md#search) | **GET** /api/v1/search | Search documents, templates, forms and people
*DocumentsApi* | [**sendDocument**](docs/Api/DocumentsApi.md#senddocument) | **POST** /api/v1/documents/send | Send a template to people to sign
*DocumentsApi* | [**sendDraft**](docs/Api/DocumentsApi.md#senddraft) | **POST** /api/v1/documents/{id}/send | Send a draft
*DocumentsApi* | [**testSign**](docs/Api/DocumentsApi.md#testsign) | **POST** /api/v1/documents/{id}/test-sign | Sign a test document (test mode only)
*DocumentsApi* | [**voidDocument**](docs/Api/DocumentsApi.md#voiddocument) | **POST** /api/v1/documents/{id}/void | Void a document that is still out for signature
*EmailApi* | [**listEmailTemplates**](docs/Api/EmailApi.md#listemailtemplates) | **GET** /api/v1/email-templates | The workspace&#39;s email wording
*EmailApi* | [**listEmails**](docs/Api/EmailApi.md#listemails) | **GET** /api/v1/emails | The log of email about your documents
*EmailApi* | [**previewEmailTemplate**](docs/Api/EmailApi.md#previewemailtemplate) | **POST** /api/v1/email-templates/{kind}/preview | Preview an email with made-up names
*EmailApi* | [**resetEmailTemplate**](docs/Api/EmailApi.md#resetemailtemplate) | **DELETE** /api/v1/email-templates/{kind} | Back to the standard wording
*EmailApi* | [**saveEmailTemplate**](docs/Api/EmailApi.md#saveemailtemplate) | **PUT** /api/v1/email-templates/{kind} | Set the wording of one email
*EmbeddingApi* | [**builderSession**](docs/Api/EmbeddingApi.md#buildersession) | **POST** /api/v1/embedded/builder-session | Start an embedded template builder session
*EmbeddingApi* | [**scribeSession**](docs/Api/EmbeddingApi.md#scribesession) | **POST** /api/v1/embedded/scribe-session | Start an embedded Scribe session
*FormsApi* | [**getForm**](docs/Api/FormsApi.md#getform) | **GET** /api/v1/forms/{id} | Get a form
*FormsApi* | [**listFormResponses**](docs/Api/FormsApi.md#listformresponses) | **GET** /api/v1/forms/{id}/responses | List a form&#39;s responses
*FormsApi* | [**listFormTemplates**](docs/Api/FormsApi.md#listformtemplates) | **GET** /api/v1/forms/templates | List form templates
*FormsApi* | [**listForms**](docs/Api/FormsApi.md#listforms) | **GET** /api/v1/forms | List forms
*FormsApi* | [**publishForm**](docs/Api/FormsApi.md#publishform) | **POST** /api/v1/forms/publish | Publish a form
*FormsApi* | [**setFormOpen**](docs/Api/FormsApi.md#setformopen) | **POST** /api/v1/forms/{id}/open | Open or close a form
*FormsApi* | [**unpublishForm**](docs/Api/FormsApi.md#unpublishform) | **POST** /api/v1/forms/{id}/unpublish | Unpublish a form
*PaymentsApi* | [**listPayments**](docs/Api/PaymentsApi.md#listpayments) | **GET** /api/v1/payments | List payments taken through documents and forms
*PaymentsApi* | [**refundPayment**](docs/Api/PaymentsApi.md#refundpayment) | **POST** /api/v1/payments/{id}/refund | Refund a payment, in full or in part
*PlaysApi* | [**answerDraft**](docs/Api/PlaysApi.md#answerdraft) | **POST** /api/v1/drafts/{draftRef}/answers | Answer a template&#39;s questions
*PlaysApi* | [**archivePlay**](docs/Api/PlaysApi.md#archiveplay) | **DELETE** /api/v1/plays/{name} | Archive a play
*PlaysApi* | [**duplicatePlay**](docs/Api/PlaysApi.md#duplicateplay) | **POST** /api/v1/plays/{name}/duplicate | Copy a play under a new name
*PlaysApi* | [**getPlay**](docs/Api/PlaysApi.md#getplay) | **GET** /api/v1/plays/{name} | One play
*PlaysApi* | [**listPlaybooks**](docs/Api/PlaysApi.md#listplaybooks) | **GET** /api/v1/playbooks | List playbooks (packs)
*PlaysApi* | [**listPlays**](docs/Api/PlaysApi.md#listplays) | **GET** /api/v1/plays | List plays
*PlaysApi* | [**publishPlay**](docs/Api/PlaysApi.md#publishplay) | **POST** /api/v1/plays/{name}/publish | Publish a play version
*PlaysApi* | [**savePlay**](docs/Api/PlaysApi.md#saveplay) | **POST** /api/v1/plays | Save a play (a new version)
*PlaysApi* | [**savePlaybook**](docs/Api/PlaysApi.md#saveplaybook) | **POST** /api/v1/playbooks | Save a playbook (pack)
*PlaysApi* | [**setPlaybookOn**](docs/Api/PlaysApi.md#setplaybookon) | **POST** /api/v1/playbooks/{name}/enable | Switch a pack on or off
*PlaysApi* | [**startDraft**](docs/Api/PlaysApi.md#startdraft) | **POST** /api/v1/drafts | Start a draft from a template
*PlaysApi* | [**testPlay**](docs/Api/PlaysApi.md#testplay) | **POST** /api/v1/plays/test | Check a play without saving it
*ReportsApi* | [**report**](docs/Api/ReportsApi.md#report) | **GET** /api/v1/reports | Counts of what was sent and completed
*TeamsApi* | [**listTeams**](docs/Api/TeamsApi.md#listteams) | **GET** /api/v1/teams | Teams and their members
*TemplatesApi* | [**createTemplateFromFile**](docs/Api/TemplatesApi.md#createtemplatefromfile) | **POST** /api/v1/templates/file | Make a template from a file with text tags
*TemplatesApi* | [**createTemplateFromHtml**](docs/Api/TemplatesApi.md#createtemplatefromhtml) | **POST** /api/v1/templates/html | Make a template from HTML with text tags
*TemplatesApi* | [**createTemplateFromSource**](docs/Api/TemplatesApi.md#createtemplatefromsource) | **POST** /api/v1/templates/source | Make a template from a document source
*TemplatesApi* | [**customizeLibraryTemplate**](docs/Api/TemplatesApi.md#customizelibrarytemplate) | **POST** /api/v1/templates/library/{slug}/customize | Customize a built-in template
*TemplatesApi* | [**draftFromLibraryTemplate**](docs/Api/TemplatesApi.md#draftfromlibrarytemplate) | **POST** /api/v1/templates/library/{slug}/documents | Make a draft from a built-in template
*TemplatesApi* | [**getLibraryTemplate**](docs/Api/TemplatesApi.md#getlibrarytemplate) | **GET** /api/v1/templates/library/{slug} | One built-in template
*TemplatesApi* | [**getTemplate**](docs/Api/TemplatesApi.md#gettemplate) | **GET** /api/v1/templates/{id} | One template and its seats
*TemplatesApi* | [**listLibraryTemplates**](docs/Api/TemplatesApi.md#listlibrarytemplates) | **GET** /api/v1/templates/library | List the built-in templates
*TemplatesApi* | [**setTemplateDefaults**](docs/Api/TemplatesApi.md#settemplatedefaults) | **POST** /api/v1/templates/{id}/defaults | Set what a document made from a template starts with
*TemplatesApi* | [**useTemplate**](docs/Api/TemplatesApi.md#usetemplate) | **POST** /api/v1/templates/{id}/documents | Use a written template for people
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /api/v1/webhooks | Add a webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /api/v1/webhooks/{id} | Remove a webhook
*WebhooksApi* | [**fetchRelayEvents**](docs/Api/WebhooksApi.md#fetchrelayevents) | **GET** /api/v1/webhooks/{id}/relay | Fetch stored deliveries of a relay webhook
*WebhooksApi* | [**listWebhookDeliveries**](docs/Api/WebhooksApi.md#listwebhookdeliveries) | **GET** /api/v1/webhooks/{id}/deliveries | Recent deliveries
*WebhooksApi* | [**listWebhookTopics**](docs/Api/WebhooksApi.md#listwebhooktopics) | **GET** /api/v1/webhooks/topics | The events a webhook can subscribe to
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /api/v1/webhooks | List webhooks
*WebhooksApi* | [**rotateWebhookSecret**](docs/Api/WebhooksApi.md#rotatewebhooksecret) | **POST** /api/v1/webhooks/{id}/rotate | Rotate the signing secret
*WebhooksApi* | [**testWebhook**](docs/Api/WebhooksApi.md#testwebhook) | **POST** /api/v1/webhooks/{id}/test | Send a test event

## Models

- [AiDraftJob](docs/Model/AiDraftJob.md)
- [AiUsage](docs/Model/AiUsage.md)
- [AiUsageByFeatureValue](docs/Model/AiUsageByFeatureValue.md)
- [AiUsageThinkHarder](docs/Model/AiUsageThinkHarder.md)
- [AnswerDraftRequest](docs/Model/AnswerDraftRequest.md)
- [BuilderSession](docs/Model/BuilderSession.md)
- [BuilderSessionRequest](docs/Model/BuilderSessionRequest.md)
- [CheckDocument200Response](docs/Model/CheckDocument200Response.md)
- [CheckDocumentRequest](docs/Model/CheckDocumentRequest.md)
- [CreateDocumentRequest](docs/Model/CreateDocumentRequest.md)
- [CreateTemplateFromSource201Response](docs/Model/CreateTemplateFromSource201Response.md)
- [CreateTemplateFromSourceRequest](docs/Model/CreateTemplateFromSourceRequest.md)
- [CreateWebhook201Response](docs/Model/CreateWebhook201Response.md)
- [CreateWebhookRequest](docs/Model/CreateWebhookRequest.md)
- [CustomizeLibraryTemplateRequest](docs/Model/CustomizeLibraryTemplateRequest.md)
- [DeleteWebhook200Response](docs/Model/DeleteWebhook200Response.md)
- [DetectFieldsRequest](docs/Model/DetectFieldsRequest.md)
- [DetectFieldsResult](docs/Model/DetectFieldsResult.md)
- [DetectFieldsResultDocumentsInner](docs/Model/DetectFieldsResultDocumentsInner.md)
- [DetectFieldsResultPagesInner](docs/Model/DetectFieldsResultPagesInner.md)
- [DetectFieldsResultSummary](docs/Model/DetectFieldsResultSummary.md)
- [DetectedField](docs/Model/DetectedField.md)
- [Document](docs/Model/Document.md)
- [DocumentEventsInner](docs/Model/DocumentEventsInner.md)
- [DocumentMade](docs/Model/DocumentMade.md)
- [DocumentSummary](docs/Model/DocumentSummary.md)
- [DraftFromLibraryTemplateRequest](docs/Model/DraftFromLibraryTemplateRequest.md)
- [DraftWithAi202Response](docs/Model/DraftWithAi202Response.md)
- [DraftWithAiRequest](docs/Model/DraftWithAiRequest.md)
- [DuplicatePlayRequest](docs/Model/DuplicatePlayRequest.md)
- [EditWithAiRequest](docs/Model/EditWithAiRequest.md)
- [EditWithAiRequestVariablesInner](docs/Model/EditWithAiRequestVariablesInner.md)
- [EmailChoice](docs/Model/EmailChoice.md)
- [EmailWording](docs/Model/EmailWording.md)
- [EmbedSession200Response](docs/Model/EmbedSession200Response.md)
- [EmbedSessionRequest](docs/Model/EmbedSessionRequest.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [FetchRelayEvents200Response](docs/Model/FetchRelayEvents200Response.md)
- [FetchRelayEvents200ResponseEventsInner](docs/Model/FetchRelayEvents200ResponseEventsInner.md)
- [FileTemplateRequest](docs/Model/FileTemplateRequest.md)
- [FormSettings](docs/Model/FormSettings.md)
- [FormSettingsCounterSign](docs/Model/FormSettingsCounterSign.md)
- [GetDraftSource200Response](docs/Model/GetDraftSource200Response.md)
- [HtmlTemplateRequest](docs/Model/HtmlTemplateRequest.md)
- [ListDocuments200Response](docs/Model/ListDocuments200Response.md)
- [ListDocuments200ResponsePage](docs/Model/ListDocuments200ResponsePage.md)
- [ListEmailTemplates200Response](docs/Model/ListEmailTemplates200Response.md)
- [ListEmails200Response](docs/Model/ListEmails200Response.md)
- [ListLibraryTemplates400Response](docs/Model/ListLibraryTemplates400Response.md)
- [ListLibraryTemplates400ResponseError](docs/Model/ListLibraryTemplates400ResponseError.md)
- [ListTeams200Response](docs/Model/ListTeams200Response.md)
- [ListTeams200ResponseTeamsInner](docs/Model/ListTeams200ResponseTeamsInner.md)
- [ListTeams200ResponseTeamsInnerMembersInner](docs/Model/ListTeams200ResponseTeamsInnerMembersInner.md)
- [ListTemplates200Response](docs/Model/ListTemplates200Response.md)
- [ListWebhookDeliveries200Response](docs/Model/ListWebhookDeliveries200Response.md)
- [ListWebhookDeliveries200ResponseDeliveriesInner](docs/Model/ListWebhookDeliveries200ResponseDeliveriesInner.md)
- [ListWebhookTopics200Response](docs/Model/ListWebhookTopics200Response.md)
- [ListWebhooks200Response](docs/Model/ListWebhooks200Response.md)
- [Party](docs/Model/Party.md)
- [Payment](docs/Model/Payment.md)
- [PaymentFee](docs/Model/PaymentFee.md)
- [PaymentsStatus200Response](docs/Model/PaymentsStatus200Response.md)
- [Person](docs/Model/Person.md)
- [PublishFormRequest](docs/Model/PublishFormRequest.md)
- [PublishPlayRequest](docs/Model/PublishPlayRequest.md)
- [RefundPaymentRequest](docs/Model/RefundPaymentRequest.md)
- [Remind200Response](docs/Model/Remind200Response.md)
- [RemindRequest](docs/Model/RemindRequest.md)
- [Report](docs/Model/Report.md)
- [ReportByDayInner](docs/Model/ReportByDayInner.md)
- [ReportByTemplateInner](docs/Model/ReportByTemplateInner.md)
- [ReportTotals](docs/Model/ReportTotals.md)
- [ReportWindow](docs/Model/ReportWindow.md)
- [ReviseDocument201Response](docs/Model/ReviseDocument201Response.md)
- [ReviseDocumentRequest](docs/Model/ReviseDocumentRequest.md)
- [RotateWebhookSecret200Response](docs/Model/RotateWebhookSecret200Response.md)
- [RotateWebhookSecretRequest](docs/Model/RotateWebhookSecretRequest.md)
- [SavePlayRequest](docs/Model/SavePlayRequest.md)
- [SavePlaybookRequest](docs/Model/SavePlaybookRequest.md)
- [ScribeSessionRequest](docs/Model/ScribeSessionRequest.md)
- [SendChoices](docs/Model/SendChoices.md)
- [SendDocument201Response](docs/Model/SendDocument201Response.md)
- [SendDocument201ResponseNotEmailedInner](docs/Model/SendDocument201ResponseNotEmailedInner.md)
- [SendDraft201Response](docs/Model/SendDraft201Response.md)
- [SendDraft202Response](docs/Model/SendDraft202Response.md)
- [SendDraft202ResponseApproval](docs/Model/SendDraft202ResponseApproval.md)
- [SendRequest](docs/Model/SendRequest.md)
- [SendRequestPartiesInner](docs/Model/SendRequestPartiesInner.md)
- [SetAutomationOnRequest](docs/Model/SetAutomationOnRequest.md)
- [SetContractDateRequest](docs/Model/SetContractDateRequest.md)
- [SetFormOpenRequest](docs/Model/SetFormOpenRequest.md)
- [SetPlaybookOnRequest](docs/Model/SetPlaybookOnRequest.md)
- [SetTemplateDefaults200Response](docs/Model/SetTemplateDefaults200Response.md)
- [SetTemplateDefaultsRequest](docs/Model/SetTemplateDefaultsRequest.md)
- [StartDraftRequest](docs/Model/StartDraftRequest.md)
- [StartDraftRequestAnswersValue](docs/Model/StartDraftRequestAnswersValue.md)
- [StartDraftRequestPeopleInner](docs/Model/StartDraftRequestPeopleInner.md)
- [Template](docs/Model/Template.md)
- [TemplateMade](docs/Model/TemplateMade.md)
- [TemplateMadeDetected](docs/Model/TemplateMadeDetected.md)
- [TemplateMadeWarningsInner](docs/Model/TemplateMadeWarningsInner.md)
- [TemplateSeatsInner](docs/Model/TemplateSeatsInner.md)
- [TestSign200Response](docs/Model/TestSign200Response.md)
- [TestSign200ResponseProgress](docs/Model/TestSign200ResponseProgress.md)
- [TestSignRequest](docs/Model/TestSignRequest.md)
- [TestWebhook200Response](docs/Model/TestWebhook200Response.md)
- [TestWebhookRequest](docs/Model/TestWebhookRequest.md)
- [Usage](docs/Model/Usage.md)
- [UsageDocuments](docs/Model/UsageDocuments.md)
- [UsageEmails](docs/Model/UsageEmails.md)
- [UsagePeriod](docs/Model/UsagePeriod.md)
- [UsageTemplates](docs/Model/UsageTemplates.md)
- [UseTemplateRequest](docs/Model/UseTemplateRequest.md)
- [VoidDocument200Response](docs/Model/VoidDocument200Response.md)
- [VoidDocumentRequest](docs/Model/VoidDocumentRequest.md)
- [WebhookEndpoint](docs/Model/WebhookEndpoint.md)
- [WizardBrief](docs/Model/WizardBrief.md)
- [WizardBriefPayment](docs/Model/WizardBriefPayment.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@docustay.app

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2026-10-07`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
