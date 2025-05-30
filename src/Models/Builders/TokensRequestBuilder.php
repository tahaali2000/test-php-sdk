<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\TokensRequest;

/**
 * Builder for model TokensRequest
 *
 * @see TokensRequest
 */
class TokensRequestBuilder
{
    /**
     * @var TokensRequest
     */
    private $instance;

    private function __construct(TokensRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Tokens Request Builder object.
     *
     * @param string[] $scopes
     */
    public static function init(array $scopes): self
    {
        return new self(new TokensRequest($scopes));
    }

    /**
     * Initializes a new Tokens Request object.
     */
    public function build(): TokensRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
