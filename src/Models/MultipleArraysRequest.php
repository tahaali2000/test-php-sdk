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

class MultipleArraysRequest implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $array1;

    /**
     * @var int[]|null
     */
    private $array2;

    /**
     * @param string[] $array1
     */
    public function __construct(array $array1)
    {
        $this->array1 = $array1;
    }

    /**
     * Returns Array 1.
     * An array containing items of type string
     *
     * @return string[]
     */
    public function getArray1(): array
    {
        return $this->array1;
    }

    /**
     * Sets Array 1.
     * An array containing items of type string
     *
     * @required
     * @maps Array1
     *
     * @param string[] $array1
     */
    public function setArray1(array $array1): void
    {
        $this->array1 = $array1;
    }

    /**
     * Returns Array 2.
     * An array containing items of type integer
     *
     * @return int[]|null
     */
    public function getArray2(): ?array
    {
        return $this->array2;
    }

    /**
     * Sets Array 2.
     * An array containing items of type integer
     *
     * @maps Array2
     *
     * @param int[]|null $array2
     */
    public function setArray2(?array $array2): void
    {
        $this->array2 = $array2;
    }

    /**
     * Converts the MultipleArraysRequest object to a human-readable string representation.
     *
     * @return string The string representation of the MultipleArraysRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MultipleArraysRequest',
            ['array1' => $this->array1, 'array2' => $this->array2]
        );
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
        $json['Array1']     = $this->array1;
        if (isset($this->array2)) {
            $json['Array2'] = $this->array2;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
