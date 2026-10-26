# TestSignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seat** | **string** | The seat to sign, for example &#x60;signer_1&#x60;. |
**decline** | **bool** | Decline the seat instead of signing it: the document becomes &#x60;declined&#x60; and &#x60;documents.document.declined&#x60; fires, as when a person declines. | [optional]
**reason** | **string** | With &#x60;decline&#x60;, the reason the sender sees. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
