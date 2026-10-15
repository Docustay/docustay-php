# # CreateDocumentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | [**\Docustay\Model\EmailChoice**](EmailChoice.md) |  | [optional]
**metadata** | **array<string,string>** | Your own key-value text (up to 20 keys; keys 1–40 letters, digits, dot, dash or underscore; values up to 500 characters). Returned in every response and every webhook for this document; never shown to a signer. | [optional]
**external_id** | **string** | Your own id for this thing, so you can match it to your records. Filter lists with &#x60;externalId&#x3D;&#x60;. | [optional]
**title** | **string** |  |
**source** | **array<string,mixed>** | A written document: TipTap JSON &#x60;{type:\&quot;doc\&quot;,content:[…]}&#x60;. Field tags (&#x60;fieldTag&#x60; with name, type, role, required, autofill, editable, placeholder, tooltip, locked, options, default…), merge chips (&#x60;variableChip&#x60;; &#x60;custom.&lt;key&gt;&#x60; chips are the template&#39;s questions), and headings with &#x60;audience: \&quot;sender\&quot;&#x60; (Sender only: in nothing a signer sees, signs or receives). |
**people** | [**\Docustay\Model\Person[]**](Person.md) |  |
**facts** | **array<string,string>** | Merge text: &#x60;org.name&#x60;, &#x60;sender.name&#x60;, &#x60;custom.&lt;key&gt;&#x60; … | [optional]
**variable_values** | **array<string,string>** |  | [optional]
**paper** | **string** |  | [optional]
**send** | [**\Docustay\Model\SendChoices**](SendChoices.md) |  | [optional]
**description** | **string** |  | [optional]
**send_now** | **bool** | Also send it. The same checks as the screen&#39;s Send apply (a payment field needs Stripe connected). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
