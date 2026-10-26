# Docustay for PHP

The official PHP client for the [Docustay](https://docustay.app) e-signature API: send a document from a template, get a webhook when each person signs, download the sealed PDF.

- API version: 2026-10-07
- Package version: 0.2.2

## Install

```sh
composer require docustay/docustay-php:0.2.2
```

PHP 7.4 or newer, with the curl, json and mbstring extensions.

## Send your first document

Put your key in `DOCUSTAY_API_KEY` and a template id in `DOCUSTAY_TEMPLATE_ID`.

```php
require __DIR__ . '/vendor/autoload.php';

$config = Docustay\Configuration::getDefaultConfiguration()->setAccessToken(getenv('DOCUSTAY_API_KEY'));
$api = new Docustay\Api\DocumentsApi(new GuzzleHttp\Client(), $config);

$request = new Docustay\Model\SendRequest([
    'template_id' => getenv('DOCUSTAY_TEMPLATE_ID'),
    'parties' => [new Docustay\Model\SendRequestPartiesInner([
        'seat' => 'signer_1', 'name' => 'Pat Example', 'email' => 'pat@example.com',
    ])],
]);
$doc = $api->sendDocument(bin2hex(random_bytes(16)), $request);
```

More: https://docustay.app/docs

## API reference

All URIs are relative to *https://app.docustay.app*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**aiUsage**](docs/ApiAccountApi.md#aiusage) | **GET** /api/v1/ai/usage | AI drafts used against your plan
*AccountApi* | [**paymentsStatus**](docs/ApiAccountApi.md#paymentsstatus) | **GET** /api/v1/payments/status | Is Stripe ready to take a payment?
*AccountApi* | [**preflight**](docs/ApiAccountApi.md#preflight) | **POST** /api/v1/preflight | Ask what an action would do to your plan, before doing it
*AccountApi* | [**usage**](docs/ApiAccountApi.md#usage) | **GET** /api/v1/usage | Documents, templates and emails used against your plan
*DocumentsApi* | [**auditLogCsv**](docs/ApiDocumentsApi.md#auditlogcsv) | **GET** /api/v1/documents/{id}/audit-log.csv | The document&#39;s audit log as CSV
*DocumentsApi* | [**cancelAiJob**](docs/ApiDocumentsApi.md#cancelaijob) | **POST** /api/v1/documents/ai/jobs/{id}/cancel | Cancel an AI job
*DocumentsApi* | [**checkDocument**](docs/ApiDocumentsApi.md#checkdocument) | **POST** /api/v1/documents/check | Check a document&#39;s words before making it
*DocumentsApi* | [**createDocument**](docs/ApiDocumentsApi.md#createdocument) | **POST** /api/v1/documents | Make a document from words and people
*DocumentsApi* | [**deleteDraft**](docs/ApiDocumentsApi.md#deletedraft) | **DELETE** /api/v1/documents/{id} | Delete a draft that was never sent
*DocumentsApi* | [**detectFields**](docs/ApiDocumentsApi.md#detectfields) | **POST** /api/v1/documents/detect-fields | Find the fields on a PDF
*DocumentsApi* | [**downloadSignedPdf**](docs/ApiDocumentsApi.md#downloadsignedpdf) | **GET** /api/v1/documents/{id}/signed.pdf | Download the signed copy
*DocumentsApi* | [**draftWithAi**](docs/ApiDocumentsApi.md#draftwithai) | **POST** /api/v1/documents/ai/draft | Ask for an AI-written draft
*DocumentsApi* | [**editWithAi**](docs/ApiDocumentsApi.md#editwithai) | **POST** /api/v1/documents/ai/edit | Ask the assistant to change a document
*DocumentsApi* | [**embedSession**](docs/ApiDocumentsApi.md#embedsession) | **POST** /api/v1/documents/{id}/embed-session | Start an embedded signing session for a seat
*DocumentsApi* | [**getAiDraft**](docs/ApiDocumentsApi.md#getaidraft) | **GET** /api/v1/documents/ai/jobs/{id} | Read an AI draft job
*DocumentsApi* | [**getDocument**](docs/ApiDocumentsApi.md#getdocument) | **GET** /api/v1/documents/{id} | One document and where each person is
*DocumentsApi* | [**getDraftSource**](docs/ApiDocumentsApi.md#getdraftsource) | **GET** /api/v1/documents/{id}/source | The words, people and choices of a draft
*DocumentsApi* | [**getWizard**](docs/ApiDocumentsApi.md#getwizard) | **GET** /api/v1/ai/wizard | The wizard&#39;s questions
*DocumentsApi* | [**listDocuments**](docs/ApiDocumentsApi.md#listdocuments) | **GET** /api/v1/documents | List documents
*DocumentsApi* | [**listTemplates**](docs/ApiDocumentsApi.md#listtemplates) | **GET** /api/v1/documents/templates | Templates you can send
*DocumentsApi* | [**remind**](docs/ApiDocumentsApi.md#remind) | **POST** /api/v1/documents/{id}/remind | Remind the people who still have to sign
*DocumentsApi* | [**reviseDocument**](docs/ApiDocumentsApi.md#revisedocument) | **POST** /api/v1/documents/{id}/revise | Change the words of a draft
*DocumentsApi* | [**search**](docs/ApiDocumentsApi.md#search) | **GET** /api/v1/search | Search documents, templates and people
*DocumentsApi* | [**sendDocument**](docs/ApiDocumentsApi.md#senddocument) | **POST** /api/v1/documents/send | Send a template to people to sign
*DocumentsApi* | [**sendDraft**](docs/ApiDocumentsApi.md#senddraft) | **POST** /api/v1/documents/{id}/send | Send a draft
*DocumentsApi* | [**testSign**](docs/ApiDocumentsApi.md#testsign) | **POST** /api/v1/documents/{id}/test-sign | Sign a test document (test mode only)
*DocumentsApi* | [**voidDocument**](docs/ApiDocumentsApi.md#voiddocument) | **POST** /api/v1/documents/{id}/void | Void a document that is still out for signature
*EmailApi* | [**listEmails**](docs/ApiEmailApi.md#listemails) | **GET** /api/v1/emails | The log of email about your documents
*EmbeddingApi* | [**builderSession**](docs/ApiEmbeddingApi.md#buildersession) | **POST** /api/v1/embedded/builder-session | Start an embedded template builder session
*EmbeddingApi* | [**scribeSession**](docs/ApiEmbeddingApi.md#scribesession) | **POST** /api/v1/embedded/scribe-session | Start an embedded Scribe session
*PaymentsApi* | [**listPayments**](docs/ApiPaymentsApi.md#listpayments) | **GET** /api/v1/payments | List payments taken through documents
*PaymentsApi* | [**refundPayment**](docs/ApiPaymentsApi.md#refundpayment) | **POST** /api/v1/payments/{id}/refund | Refund a payment, in full or in part
*PlaysApi* | [**answerDraft**](docs/ApiPlaysApi.md#answerdraft) | **POST** /api/v1/drafts/{draftRef}/answers | Answer a template&#39;s questions
*PlaysApi* | [**archivePlay**](docs/ApiPlaysApi.md#archiveplay) | **DELETE** /api/v1/plays/{name} | Archive a play
*PlaysApi* | [**duplicatePlay**](docs/ApiPlaysApi.md#duplicateplay) | **POST** /api/v1/plays/{name}/duplicate | Copy a play under a new name
*PlaysApi* | [**getPlay**](docs/ApiPlaysApi.md#getplay) | **GET** /api/v1/plays/{name} | One play
*PlaysApi* | [**listPlaybooks**](docs/ApiPlaysApi.md#listplaybooks) | **GET** /api/v1/playbooks | List playbooks (packs)
*PlaysApi* | [**listPlays**](docs/ApiPlaysApi.md#listplays) | **GET** /api/v1/plays | List plays
*PlaysApi* | [**publishPlay**](docs/ApiPlaysApi.md#publishplay) | **POST** /api/v1/plays/{name}/publish | Publish a play version
*PlaysApi* | [**savePlay**](docs/ApiPlaysApi.md#saveplay) | **POST** /api/v1/plays | Save a play (a new version)
*PlaysApi* | [**savePlaybook**](docs/ApiPlaysApi.md#saveplaybook) | **POST** /api/v1/playbooks | Save a playbook (pack)
*PlaysApi* | [**setPlaybookOn**](docs/ApiPlaysApi.md#setplaybookon) | **POST** /api/v1/playbooks/{name}/enable | Switch a pack on or off
*PlaysApi* | [**startDraft**](docs/ApiPlaysApi.md#startdraft) | **POST** /api/v1/drafts | Start a draft from a template
*PlaysApi* | [**testPlay**](docs/ApiPlaysApi.md#testplay) | **POST** /api/v1/plays/test | Check a play without saving it
*TeamsApi* | [**listTeams**](docs/ApiTeamsApi.md#listteams) | **GET** /api/v1/teams | Teams and their members
*TemplatesApi* | [**createTemplateFromFile**](docs/ApiTemplatesApi.md#createtemplatefromfile) | **POST** /api/v1/templates/file | Make a template from a file with text tags
*TemplatesApi* | [**createTemplateFromHtml**](docs/ApiTemplatesApi.md#createtemplatefromhtml) | **POST** /api/v1/templates/html | Make a template from HTML with text tags
*TemplatesApi* | [**createTemplateFromSource**](docs/ApiTemplatesApi.md#createtemplatefromsource) | **POST** /api/v1/templates/source | Make a template from a document source
*TemplatesApi* | [**customizeLibraryTemplate**](docs/ApiTemplatesApi.md#customizelibrarytemplate) | **POST** /api/v1/templates/library/{slug}/customize | Customize a built-in template
*TemplatesApi* | [**draftFromLibraryTemplate**](docs/ApiTemplatesApi.md#draftfromlibrarytemplate) | **POST** /api/v1/templates/library/{slug}/documents | Make a draft from a built-in template
*TemplatesApi* | [**getLibraryTemplate**](docs/ApiTemplatesApi.md#getlibrarytemplate) | **GET** /api/v1/templates/library/{slug} | One built-in template
*TemplatesApi* | [**getTemplate**](docs/ApiTemplatesApi.md#gettemplate) | **GET** /api/v1/templates/{id} | One template and its seats
*TemplatesApi* | [**listLibraryTemplates**](docs/ApiTemplatesApi.md#listlibrarytemplates) | **GET** /api/v1/templates/library | List the built-in templates
*TemplatesApi* | [**setTemplateDefaults**](docs/ApiTemplatesApi.md#settemplatedefaults) | **POST** /api/v1/templates/{id}/defaults | Set what a document made from a template starts with
*TemplatesApi* | [**useTemplate**](docs/ApiTemplatesApi.md#usetemplate) | **POST** /api/v1/templates/{id}/documents | Use a written template for people
*WebhooksApi* | [**createWebhook**](docs/ApiWebhooksApi.md#createwebhook) | **POST** /api/v1/webhooks | Add a webhook
*WebhooksApi* | [**deleteWebhook**](docs/ApiWebhooksApi.md#deletewebhook) | **DELETE** /api/v1/webhooks/{id} | Remove a webhook
*WebhooksApi* | [**fetchRelayEvents**](docs/ApiWebhooksApi.md#fetchrelayevents) | **GET** /api/v1/webhooks/{id}/relay | Fetch stored deliveries of a relay webhook
*WebhooksApi* | [**getWebhook**](docs/ApiWebhooksApi.md#getwebhook) | **GET** /api/v1/webhooks/{id} | Get a webhook
*WebhooksApi* | [**listWebhookDeliveries**](docs/ApiWebhooksApi.md#listwebhookdeliveries) | **GET** /api/v1/webhooks/{id}/deliveries | Recent deliveries
*WebhooksApi* | [**listWebhookTopics**](docs/ApiWebhooksApi.md#listwebhooktopics) | **GET** /api/v1/webhooks/topics | The events a webhook can subscribe to
*WebhooksApi* | [**listWebhooks**](docs/ApiWebhooksApi.md#listwebhooks) | **GET** /api/v1/webhooks | List webhooks
*WebhooksApi* | [**rotateWebhookSecret**](docs/ApiWebhooksApi.md#rotatewebhooksecret) | **POST** /api/v1/webhooks/{id}/rotate | Rotate the signing secret
*WebhooksApi* | [**testWebhook**](docs/ApiWebhooksApi.md#testwebhook) | **POST** /api/v1/webhooks/{id}/test | Send a test event


## Models

 - [AiDraftJob](docs/ModelAiDraftJob.md)
 - [AiUsage](docs/ModelAiUsage.md)
 - [AiUsageByFeatureValue](docs/ModelAiUsageByFeatureValue.md)
 - [AnswerDraftRequest](docs/ModelAnswerDraftRequest.md)
 - [BuilderSession](docs/ModelBuilderSession.md)
 - [BuilderSessionRequest](docs/ModelBuilderSessionRequest.md)
 - [CheckDocument200Response](docs/ModelCheckDocument200Response.md)
 - [CheckDocumentRequest](docs/ModelCheckDocumentRequest.md)
 - [CreateDocumentRequest](docs/ModelCreateDocumentRequest.md)
 - [CreateTemplateFromSource201Response](docs/ModelCreateTemplateFromSource201Response.md)
 - [CreateTemplateFromSourceRequest](docs/ModelCreateTemplateFromSourceRequest.md)
 - [CreateWebhook201Response](docs/ModelCreateWebhook201Response.md)
 - [CreateWebhookRequest](docs/ModelCreateWebhookRequest.md)
 - [CustomizeLibraryTemplateRequest](docs/ModelCustomizeLibraryTemplateRequest.md)
 - [DeleteDraft200Response](docs/ModelDeleteDraft200Response.md)
 - [DeleteWebhook200Response](docs/ModelDeleteWebhook200Response.md)
 - [DetectFieldsRequest](docs/ModelDetectFieldsRequest.md)
 - [DetectFieldsResult](docs/ModelDetectFieldsResult.md)
 - [DetectFieldsResultDocumentsInner](docs/ModelDetectFieldsResultDocumentsInner.md)
 - [DetectFieldsResultPagesInner](docs/ModelDetectFieldsResultPagesInner.md)
 - [DetectFieldsResultSummary](docs/ModelDetectFieldsResultSummary.md)
 - [DetectedField](docs/ModelDetectedField.md)
 - [Document](docs/ModelDocument.md)
 - [DocumentEventsInner](docs/ModelDocumentEventsInner.md)
 - [DocumentMade](docs/ModelDocumentMade.md)
 - [DocumentSummary](docs/ModelDocumentSummary.md)
 - [DraftFromLibraryTemplateRequest](docs/ModelDraftFromLibraryTemplateRequest.md)
 - [DraftWithAi202Response](docs/ModelDraftWithAi202Response.md)
 - [DraftWithAiRequest](docs/ModelDraftWithAiRequest.md)
 - [DuplicatePlayRequest](docs/ModelDuplicatePlayRequest.md)
 - [EditWithAiRequest](docs/ModelEditWithAiRequest.md)
 - [EditWithAiRequestVariablesInner](docs/ModelEditWithAiRequestVariablesInner.md)
 - [EmailChoice](docs/ModelEmailChoice.md)
 - [EmbedSession200Response](docs/ModelEmbedSession200Response.md)
 - [EmbedSessionRequest](docs/ModelEmbedSessionRequest.md)
 - [Error](docs/ModelError.md)
 - [ErrorError](docs/ModelErrorError.md)
 - [FetchRelayEvents200Response](docs/ModelFetchRelayEvents200Response.md)
 - [FetchRelayEvents200ResponseEventsInner](docs/ModelFetchRelayEvents200ResponseEventsInner.md)
 - [FileTemplateRequest](docs/ModelFileTemplateRequest.md)
 - [GetDraftSource200Response](docs/ModelGetDraftSource200Response.md)
 - [HtmlTemplateRequest](docs/ModelHtmlTemplateRequest.md)
 - [ListDocuments200Response](docs/ModelListDocuments200Response.md)
 - [ListDocuments200ResponsePage](docs/ModelListDocuments200ResponsePage.md)
 - [ListEmails200Response](docs/ModelListEmails200Response.md)
 - [ListLibraryTemplates400Response](docs/ModelListLibraryTemplates400Response.md)
 - [ListLibraryTemplates400ResponseError](docs/ModelListLibraryTemplates400ResponseError.md)
 - [ListTeams200Response](docs/ModelListTeams200Response.md)
 - [ListTeams200ResponseTeamsInner](docs/ModelListTeams200ResponseTeamsInner.md)
 - [ListTeams200ResponseTeamsInnerMembersInner](docs/ModelListTeams200ResponseTeamsInnerMembersInner.md)
 - [ListTemplates200Response](docs/ModelListTemplates200Response.md)
 - [ListWebhookDeliveries200Response](docs/ModelListWebhookDeliveries200Response.md)
 - [ListWebhookDeliveries200ResponseDeliveriesInner](docs/ModelListWebhookDeliveries200ResponseDeliveriesInner.md)
 - [ListWebhookTopics200Response](docs/ModelListWebhookTopics200Response.md)
 - [ListWebhooks200Response](docs/ModelListWebhooks200Response.md)
 - [Party](docs/ModelParty.md)
 - [Payment](docs/ModelPayment.md)
 - [PaymentFee](docs/ModelPaymentFee.md)
 - [PaymentsStatus200Response](docs/ModelPaymentsStatus200Response.md)
 - [Person](docs/ModelPerson.md)
 - [PreflightAnswer](docs/ModelPreflightAnswer.md)
 - [PreflightAnswerCost](docs/ModelPreflightAnswerCost.md)
 - [PreflightAnswerPeriod](docs/ModelPreflightAnswerPeriod.md)
 - [PreflightAnswerPlan](docs/ModelPreflightAnswerPlan.md)
 - [PreflightOption](docs/ModelPreflightOption.md)
 - [PreflightRequest](docs/ModelPreflightRequest.md)
 - [PublishPlayRequest](docs/ModelPublishPlayRequest.md)
 - [RefundPaymentRequest](docs/ModelRefundPaymentRequest.md)
 - [Remind200Response](docs/ModelRemind200Response.md)
 - [RemindRequest](docs/ModelRemindRequest.md)
 - [ReviseDocument201Response](docs/ModelReviseDocument201Response.md)
 - [ReviseDocumentRequest](docs/ModelReviseDocumentRequest.md)
 - [RotateWebhookSecret200Response](docs/ModelRotateWebhookSecret200Response.md)
 - [RotateWebhookSecretRequest](docs/ModelRotateWebhookSecretRequest.md)
 - [SavePlayRequest](docs/ModelSavePlayRequest.md)
 - [SavePlaybookRequest](docs/ModelSavePlaybookRequest.md)
 - [ScribeSessionRequest](docs/ModelScribeSessionRequest.md)
 - [SendChoices](docs/ModelSendChoices.md)
 - [SendDocument201Response](docs/ModelSendDocument201Response.md)
 - [SendDocument201ResponseNotEmailedInner](docs/ModelSendDocument201ResponseNotEmailedInner.md)
 - [SendDraft201Response](docs/ModelSendDraft201Response.md)
 - [SendDraft202Response](docs/ModelSendDraft202Response.md)
 - [SendDraft202ResponseApproval](docs/ModelSendDraft202ResponseApproval.md)
 - [SendDraftRequest](docs/ModelSendDraftRequest.md)
 - [SendRequest](docs/ModelSendRequest.md)
 - [SendRequestPartiesInner](docs/ModelSendRequestPartiesInner.md)
 - [SetPlaybookOnRequest](docs/ModelSetPlaybookOnRequest.md)
 - [SetTemplateDefaults200Response](docs/ModelSetTemplateDefaults200Response.md)
 - [SetTemplateDefaultsRequest](docs/ModelSetTemplateDefaultsRequest.md)
 - [StartDraftRequest](docs/ModelStartDraftRequest.md)
 - [StartDraftRequestAnswersValue](docs/ModelStartDraftRequestAnswersValue.md)
 - [StartDraftRequestPeopleInner](docs/ModelStartDraftRequestPeopleInner.md)
 - [Template](docs/ModelTemplate.md)
 - [TemplateMade](docs/ModelTemplateMade.md)
 - [TemplateMadeDetected](docs/ModelTemplateMadeDetected.md)
 - [TemplateMadeWarningsInner](docs/ModelTemplateMadeWarningsInner.md)
 - [TemplateSeatsInner](docs/ModelTemplateSeatsInner.md)
 - [TestSign200Response](docs/ModelTestSign200Response.md)
 - [TestSign200ResponseProgress](docs/ModelTestSign200ResponseProgress.md)
 - [TestSignRequest](docs/ModelTestSignRequest.md)
 - [TestWebhook200Response](docs/ModelTestWebhook200Response.md)
 - [TestWebhookRequest](docs/ModelTestWebhookRequest.md)
 - [Usage](docs/ModelUsage.md)
 - [UsageBilling](docs/ModelUsageBilling.md)
 - [UsageDocuments](docs/ModelUsageDocuments.md)
 - [UsageDrafts](docs/ModelUsageDrafts.md)
 - [UsageEmails](docs/ModelUsageEmails.md)
 - [UsageLimits](docs/ModelUsageLimits.md)
 - [UsagePeriod](docs/ModelUsagePeriod.md)
 - [UsageSigners](docs/ModelUsageSigners.md)
 - [UsageTemplates](docs/ModelUsageTemplates.md)
 - [UseTemplateRequest](docs/ModelUseTemplateRequest.md)
 - [VoidDocument200Response](docs/ModelVoidDocument200Response.md)
 - [VoidDocumentRequest](docs/ModelVoidDocumentRequest.md)
 - [WebhookDocumentsDocumentCreatedRequest](docs/ModelWebhookDocumentsDocumentCreatedRequest.md)
 - [WebhookDocumentsDocumentSentRequest](docs/ModelWebhookDocumentsDocumentSentRequest.md)
 - [WebhookEndpoint](docs/ModelWebhookEndpoint.md)
 - [WizardBrief](docs/ModelWizardBrief.md)
 - [WizardBriefPayment](docs/ModelWizardBriefPayment.md)


## Authorization

Send your API key as a bearer token: `Authorization: Bearer $DOCUSTAY_API_KEY`. A test key (it starts with `ds_test_`) only ever emails you.

## Licence

MIT. See the LICENSE file. The Docustay server is AGPL-3.0; this client is MIT so you can ship it in any project.
