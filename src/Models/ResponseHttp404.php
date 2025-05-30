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

class ResponseHttp404 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Converts the ResponseHttp404 object to a human-readable string representation.
     *
     * @return string The string representation of the ResponseHttp404 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ResponseHttp404', ['id' => $this->id]);
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
        if (isset($this->id)) {
            $json['id'] = $this->id;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
