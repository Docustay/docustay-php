# SendDocument201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**state** | **string** |  |
**external_id** | **string** | Your own id for this thing, so you can match it to your records. Filter lists with &#x60;externalId&#x3D;&#x60;. | [optional]
**metadata** | **array<string,string>** | Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer. | [optional]
**emailed** | **int** | How many signing emails went out now. |
**not_emailed** | [**\Docustay\Model\SendDocument201ResponseNotEmailedInner[]**](SendDocument201ResponseNotEmailedInner.md) | Anyone who was NOT emailed, and why (for example &#x60;limit_reached&#x60;: the daily email limit). The document is still sent; fetch their link or send a reminder later. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
