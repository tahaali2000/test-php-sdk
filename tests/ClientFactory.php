<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Tests;

use Core\Types\CallbackCatcher;
use CypressTestAPILib\CypressTestAPIClient;
use CypressTestAPILib\CypressTestAPIClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): CypressTestAPIClient
    {
        $clientBuilder = CypressTestAPIClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(CypressTestAPIClientBuilder $builder): CypressTestAPIClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        CypressTestAPIClientBuilder $builder
    ): CypressTestAPIClientBuilder {
        $timeout = getenv('CYPRESS_TEST_API_LIB_TIMEOUT');
        $numberOfRetries = getenv('CYPRESS_TEST_API_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('CYPRESS_TEST_API_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('CYPRESS_TEST_API_LIB_ENVIRONMENT');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        return $builder;
    }
}
