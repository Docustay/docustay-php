# WebhookDocumentsDocumentSentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The event&#39;s id; the same value as the webhook-id header. Time-ordered, and unchanged when a delivery is retried. |
**topic** | **string** | What happened. |
**subject_type** | **string** |  |
**subject_id** | **string** |  |
**payload** | **array<string,mixed>** | Facts about the subject. Never a signing link or a code. &#x60;payload.test&#x60; is true for every event of a test-mode document. |
**emitted_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
