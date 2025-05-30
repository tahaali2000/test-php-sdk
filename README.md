
# Getting Started with Cypress Test API

## Introduction

This is a sample API to demonstrate an OpenAPI spec with multiple endpoints and a custom model.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "tr/test-sdk:2.1.8"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "tr/test-sdk": "2.1.8"
}
```

You can also view the package at:
https://packagist.org/packages/tr/test-sdk#2.1.8

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `413, 503, 504` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT', 'POST'` |
| loggingConfiguration | [`LoggingConfigurationBuilder`](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/logging-configuration-builder.md) | Represents the logging configurations for API calls |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |

The API client can be initialized as follows:

```php
$client = CypressTestAPIClientBuilder::init()
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();
```

## List of APIs

* [API](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/controllers/api.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/proxy-configuration-builder.md)
* [LoggingConfigurationBuilder](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/logging-configuration-builder.md)
* [RequestLoggingConfigurationBuilder](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/request-logging-configuration-builder.md)
* [ResponseLoggingConfigurationBuilder](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/response-logging-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/http-request.md)

### Utilities

* [ApiResponse](https://www.github.com/tahaali2000/test-php-sdk/tree/2.1.8/doc/api-response.md)

