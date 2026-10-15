# # DetectedField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**type** | **string** |  |
**page** | **int** |  |
**x** | **float** |  |
**y** | **float** |  |
**w** | **float** |  |
**h** | **float** |  |
**confidence** | **float** |  |
**source** | **string** | &#x60;native&#x60; (already a form field), &#x60;line&#x60;, &#x60;text&#x60;, &#x60;box&#x60;, &#x60;table&#x60;, &#x60;checkbox&#x60; or &#x60;highlight&#x60;. |
**label** | **string** |  | [optional]
**role** | **string** | The seat this field belongs to: one of &#x60;signers[].key&#x60;. | [optional]
**sensitive** | **bool** |  | [optional]
**format** | **string** |  | [optional]
**group** | **string** | Tick boxes that answer one question share a group: pick one. | [optional]
**uncertain** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
