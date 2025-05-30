<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib;

use CoreInterfaces\Http\HttpConfigurations;
use CypressTestAPILib\Logging\LoggingConfigurationBuilder;
use CypressTestAPILib\Proxy\ProxyConfigurationBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Represents the logging configurations for API calls.
     */
    public function getLoggingConfigurationBuilder(): ?LoggingConfigurationBuilder;

    /**
     * Represents the proxy configurations for API calls.
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string;
}
