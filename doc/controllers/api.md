# API

```php
$aPIController = $client->getAPIController();
```

## Class Name

`APIController`

## Methods

* [Create O Auth Token](../../doc/controllers/api.md#create-o-auth-token)
* [Createanitem](../../doc/controllers/api.md#createanitem)
* [Getanitemby ID](../../doc/controllers/api.md#getanitemby-id)
* [Test Endpointwith Arrays](../../doc/controllers/api.md#test-endpointwith-arrays)


# Create O Auth Token

Generates a new OAuth token with the specified scopes.

```php
function createOAuthToken(?TokensRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?TokensRequest`](../../doc/models/tokens-request.md) | Body, Optional | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance.

## Example Usage

```php
$apiResponse = $aPIController->createOAuthToken();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | `ApiException` |


# Createanitem

Creates a new resource in the system.

```php
function createanitem(string $status, ?Item $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `status` | [`string(Status3Enum)`](../../doc/models/status-3-enum.md) | Template, Required | The status of the items to filter by. |
| `body` | [`?Item`](../../doc/models/item.md) | Body, Optional | Custom model with additional properties |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type `array`.

## Example Usage

```php
$status = Status3Enum::ENUMVALUE3;

$body = ItemBuilder::init(
    '550e8400-e29b-41d4-a716-446655440000',
    'John Doe',
    DateTimeHelper::fromSimpleDateRequired('2024-05-24'),
    DateTimeHelper::fromRfc3339DateTimeRequired('05/24/2024 12:00:00'),
    1234.56,
    1234567890123,
    true,
    CustomEnum::VALUE3,
    ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'),
    ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'),
    [
        'key0' => MessageBuilder::init(
            246,
            'text4'
        )->build(),
        'key1' => MessageBuilder::init(
            246,
            'text4'
        )->build()
    ]
)->build();

$apiResponse = $aPIController->createanitem(
    $status,
    $body
);
```

## Example Response

```
{
  "match": "client_mac",
  "name": "cameras",
  "type": "match",
  "values": [
    "010203040506",
    "abcdef*"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | `ApiException` |
| 401 | Unauthorized | `ApiException` |
| 403 | Permission Denied | `ApiException` |


# Getanitemby ID

```php
function getanitembyID(string $id, string $value): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The ID of the item to retrieve |
| `value` | `string` | Query, Required | The value of the item to retrieve |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Item`](../../doc/models/item.md).

## Example Usage

```php
$id = 'id0';

$value = 'value2';

$apiResponse = $aPIController->getanitembyID(
    $id,
    $value
);
```


# Test Endpointwith Arrays

This endpoint accepts a complex structure with multiple arrays.

```php
function testEndpointwithArrays(?MultipleArraysRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?MultipleArraysRequest`](../../doc/models/multiple-arrays-request.md) | Body, Optional | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance.

## Example Usage

```php
$apiResponse = $aPIController->testEndpointwithArrays();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | `ApiException` |

