<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\MultipleArraysRequest;

/**
 * Builder for model MultipleArraysRequest
 *
 * @see MultipleArraysRequest
 */
class MultipleArraysRequestBuilder
{
    /**
     * @var MultipleArraysRequest
     */
    private $instance;

    private function __construct(MultipleArraysRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Multiple Arrays Request Builder object.
     *
     * @param string[] $array1
     */
    public static function init(array $array1): self
    {
        return new self(new MultipleArraysRequest($array1));
    }

    /**
     * Sets Array 2 field.
     *
     * @param int[]|null $value
     */
    public function array2(?array $value): self
    {
        $this->instance->setArray2($value);
        return $this;
    }

    /**
     * Initializes a new Multiple Arrays Request object.
     */
    public function build(): MultipleArraysRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
