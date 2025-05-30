<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use CypressTestAPILib\Controllers\APIController;
use CypressTestAPILib\Logging\LoggingConfigurationBuilder;
use CypressTestAPILib\Logging\RequestLoggingConfigurationBuilder;
use CypressTestAPILib\Logging\ResponseLoggingConfigurationBuilder;
use CypressTestAPILib\Proxy\ProxyConfigurationBuilder;
use CypressTestAPILib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class CypressTestAPIClient implements ConfigurationInterface
{
    private $client2;

    private $loggingConfigurationBuilder;

    private $proxyConfiguration;

    private $config;

    private $client;

    /**
     * @see CypressTestAPIClientBuilder::init()
     * @see CypressTestAPIClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $loggingConfiguration = null;
        if ($this->config['loggingConfiguration'] instanceof LoggingConfigurationBuilder) {
            $this->loggingConfigurationBuilder = $this->config['loggingConfiguration'];
            $loggingConfiguration = $this->loggingConfigurationBuilder->build();
        }
        $this->proxyConfiguration = $this->config['proxyConfiguration'] ?? ConfigurationDefaults::PROXY_CONFIGURATION;
        $this->client = ClientBuilder::init(
            new HttpClient(Configuration::init($this)->proxyConfiguration($this->proxyConfiguration))
        )
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('Use placeholders: {JAVA} 2.1.8 {os-info}')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->loggingConfiguration($loggingConfiguration)
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return CypressTestAPIClientBuilder CypressTestAPIClientBuilder instance
     */
    public function toBuilder(): CypressTestAPIClientBuilder
    {
        $builder = CypressTestAPIClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null)
            ->proxyConfiguration($this->getProxyConfigurationBuilder());
        $loggingConfigurationBuilder = $this->getLoggingConfigurationBuilder();
        if ($loggingConfigurationBuilder != null) {
            $builder->loggingConfiguration($loggingConfigurationBuilder);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getLoggingConfigurationBuilder(): ?LoggingConfigurationBuilder
    {
        if (is_null($this->loggingConfigurationBuilder)) {
            return null;
        }
        $config = $this->loggingConfigurationBuilder->getConfiguration();
        return LoggingConfigurationBuilder::init()
            ->level($config['level'])
            ->logger($config['logger'])
            ->maskSensitiveHeaders($config['maskSensitiveHeaders'])
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()
                ->includeQueryInPath($config['requestConfiguration']['includeQueryInPath'])
                ->body($config['requestConfiguration']['body'])
                ->headers($config['requestConfiguration']['headers'])
                ->includeHeaders(...$config['requestConfiguration']['includeHeaders'])
                ->excludeHeaders(...$config['requestConfiguration']['excludeHeaders'])
                ->unmaskHeaders(...$config['requestConfiguration']['unmaskHeaders']))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()
                ->body($config['responseConfiguration']['body'])
                ->headers($config['responseConfiguration']['headers'])
                ->includeHeaders(...$config['responseConfiguration']['includeHeaders'])
                ->excludeHeaders(...$config['responseConfiguration']['excludeHeaders'])
                ->unmaskHeaders(...$config['responseConfiguration']['unmaskHeaders']));
    }

    /**
     * Get the proxy configuration builder
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder
    {
        return ProxyConfigurationBuilder::init($this->proxyConfiguration['address'])
            ->port($this->proxyConfiguration['port'])
            ->tunnel($this->proxyConfiguration['tunnel'])
            ->auth($this->proxyConfiguration['auth']['user'], $this->proxyConfiguration['auth']['pass'])
            ->authMethod($this->proxyConfiguration['auth']['method']);
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see CypressTestAPIClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see CypressTestAPIClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns API Controller
     */
    public function getAPIController(): APIController
    {
        if ($this->client2 == null) {
            $this->client2 = new APIController($this->client);
        }
        return $this->client2;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [Environment::PRODUCTION => [Server::DEFAULT_ => 'http://example.com']];
}
