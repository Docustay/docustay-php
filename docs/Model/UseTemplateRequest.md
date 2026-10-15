# # UseTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | [**\Docustay\Model\EmailChoice**](EmailChoice.md) |  | [optional]
**metadata** | **array<string,string>** | Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer. | [optional]
**external_id** | **string** | Your own id for this thing, so you can match it to your records. Filter lists with &#x60;externalId&#x3D;&#x60;. | [optional]
**title** | **string** |  | [optional]
**people** | [**\Docustay\Model\Person[]**](Person.md) |  |
**variable_values** | **array<string,string>** |  | [optional]
**facts** | **array<string,string>** |  | [optional]
**send** | [**\Docustay\Model\SendChoices**](SendChoices.md) |  | [optional]
**send_now** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
