# # SendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **string** |  |
**email** | [**\Docustay\Model\EmailChoice**](EmailChoice.md) |  | [optional]
**metadata** | **array<string,string>** | Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer. | [optional]
**external_id** | **string** | Your own id for this thing, so you can match it to your records. Filter lists with &#x60;externalId&#x3D;&#x60;. | [optional]
**title** | **string** |  | [optional]
**message** | **string** |  | [optional]
**subject** | **string** |  | [optional]
**language** | **string** |  | [optional]
**expiry_days** | **int** |  | [optional]
**embedded** | **string[]** | Seats signed inside your own app instead of by emailed link (for example [\&quot;signer_1\&quot;]). Nobody is emailed for these seats: you ask for a session with POST /api/v1/documents/{id}/embed-session and show it on a website you listed under Settings → Developers → Embedding. | [optional]
**parties** | [**\Docustay\Model\SendRequestPartiesInner[]**](SendRequestPartiesInner.md) | One entry for each seat of the template (see GET /api/v1/documents/templates). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
