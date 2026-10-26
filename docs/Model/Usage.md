# Usage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan** | **string** |  |
**period** | [**\Docustay\Model\UsagePeriod**](UsagePeriod.md) |  |
**period_start** | **string** | When this allowance period began (ISO 8601, UTC): the start of the billing period on Pay as you go, Pro and Lifetime, the 1st of the month on Free. | [optional]
**period_end** | **string** | When it ends and every count resets (ISO 8601, UTC); shown in the app as &#39;Resets Nov 19&#39;. | [optional]
**documents** | [**\Docustay\Model\UsageDocuments**](UsageDocuments.md) |  |
**limits** | [**\Docustay\Model\UsageLimits**](UsageLimits.md) |  | [optional]
**drafts** | [**\Docustay\Model\UsageDrafts**](UsageDrafts.md) |  | [optional]
**billing** | [**\Docustay\Model\UsageBilling**](UsageBilling.md) |  | [optional]
**emails** | [**\Docustay\Model\UsageEmails**](UsageEmails.md) |  |
**templates** | [**\Docustay\Model\UsageTemplates**](UsageTemplates.md) |  | [optional]
**signers** | [**\Docustay\Model\UsageSigners**](UsageSigners.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
