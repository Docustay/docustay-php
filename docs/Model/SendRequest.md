# SendRequest

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
**expiry_days** | **int** |  | [optional]
**signing_order** | **string** | &#x60;sequential&#x60;: each seat signs in the template&#39;s seat order (signer_1 first), and an embedded seat gets its session only when it is that person&#39;s turn. Left out, the template&#39;s own setting. | [optional]
**values** | **array<string,string>** | The boxes the sender fills in (\&quot;Filled in by: Sender\&quot;) and the template&#39;s send-time amounts, by key: a box&#39;s label in lower case with underscores (\&quot;Effective date\&quot; → &#x60;effective_date&#x60;). A send that leaves one empty answers 400 naming it. | [optional]
**embedded** | **string[]** | Seats signed inside your own app instead of by emailed link (for example [\&quot;signer_1\&quot;]). Nobody is emailed for these seats: you ask for a session with POST /api/v1/documents/{id}/embed-session and show it on a website you listed under Settings → Developers → Embedding. | [optional]
**parties** | [**\Docustay\Model\SendRequestPartiesInner[]**](SendRequestPartiesInner.md) | One entry for each seat of the template (see GET /api/v1/documents/templates). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
