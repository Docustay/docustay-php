# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Your own id for this thing, so you can match it to your records. Filter lists with &#x60;externalId&#x3D;&#x60;. |
**metadata** | **array<string,string>** | Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer. |
**test** | **bool** |  |
**id** | **string** |  |
**title** | **string** |  |
**state** | **string** |  |
**sent_at** | **string** |  |
**expires_at** | **string** |  |
**executed_at** | **string** |  |
**voided_at** | **string** |  |
**void_reason** | **string** |  |
**progress** | [**\Docustay\Model\DocumentProgress**](DocumentProgress.md) |  |
**signed_copy_available** | **bool** |  |
**parties** | [**\Docustay\Model\Party[]**](Party.md) |  |
**payments** | [**\Docustay\Model\Payment[]**](Payment.md) | Payments made through payment fields on this document (empty when it has none). A payment field&#39;s amount is set by ONE of: a fixed amount, a formula over the signer&#39;s own fields, a Stripe price, or a Stripe payment link — see the text tag settings &#x60;amount&#x60;, &#x60;formula&#x60;, &#x60;price&#x60; and &#x60;link&#x60;. |
**events** | [**\Docustay\Model\DocumentEventsInner[]**](DocumentEventsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
