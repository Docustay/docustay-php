# StartDraftRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template** | **string** | A library template&#39;s slug (see &#x60;GET /api/v1/templates/library&#x60;). |
**title** | **string** |  | [optional]
**people** | [**\Docustay\Model\StartDraftRequestPeopleInner[]**](StartDraftRequestPeopleInner.md) |  |
**answers** | [**array<string,\Docustay\Model\StartDraftRequestAnswersValue>**](StartDraftRequestAnswersValue.md) |  | [optional]
**values** | **array<string,string>** | Send-time amounts the template&#39;s words need, by key (a &#x60;needs_input&#x60; answer lists them under &#x60;values&#x60;), e.g. &#x60;{ \&quot;deposit\&quot;: \&quot;$500\&quot; }&#x60;. | [optional]
**use_defaults** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
