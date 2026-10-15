# # DocumentMade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approval** | [**\Docustay\Model\DocumentMadeApproval**](DocumentMadeApproval.md) |  | [optional]
**external_id** | **string** | Your own id for this thing, so you can match it to your records. Filter lists with &#x60;externalId&#x3D;&#x60;. | [optional]
**metadata** | **array<string,string>** | Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer. | [optional]
**id** | **string** |  |
**state** | **string** |  |
**roles** | [**\Docustay\Model\TemplateSeatsInner[]**](TemplateSeatsInner.md) |  | [optional]
**emailed** | **int** |  | [optional]
**not_emailed** | **mixed[]** |  | [optional]
**warnings** | **mixed[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
