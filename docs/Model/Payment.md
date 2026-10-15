# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**field_id** | **string** |  |
**person** | **string** |  |
**status** | **string** | &#x60;paid&#x60; once Stripe says so. A refund moves it to &#x60;partially_refunded&#x60; or &#x60;refunded&#x60;. |
**amount_minor** | **int** | What was charged, in the smallest unit of &#x60;currency&#x60; (cents). Worked out on the server; never taken from the browser. |
**currency** | **string** |  |
**paid_at** | **string** |  |
**receipt_url** | **string** | Stripe&#39;s own receipt for the payment. |
**refunded_minor** | **int** |  |
**fee** | [**\Docustay\Model\PaymentFee**](PaymentFee.md) |  |
**test** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
