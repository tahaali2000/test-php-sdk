<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models;

use CypressTestAPILib\ApiHelper;
use stdClass;

class TokensRequest implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $scopes;

    /**
     * @param string[] $scopes
     */
    public function __construct(array $scopes)
    {
        $this->scopes = $scopes;
    }

    /**
     * Returns Scopes.
     * List of scopes that apply to the OAuth token
     *
     * @return string[]
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    /**
     * Sets Scopes.
     * List of scopes that apply to the OAuth token
     *
     * @required
     * @maps scopes
     * @factory \CypressTestAPILib\Models\OAuthScopeOAuthACGEnum::checkValue
     *
     * @param string[] $scopes
     */
    public function setScopes(array $scopes): void
    {
        $this->scopes = $scopes;
    }

    /**
     * Converts the TokensRequest object to a human-readable string representation.
     *
     * @return string The string representation of the TokensRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('TokensRequest', ['scopes' => $this->scopes]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['scopes'] = OAuthScopeOAuthACGEnum::checkValue($this->scopes);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
