<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\ItemResponse;

/**
 * Builder for model ItemResponse
 *
 * @see ItemResponse
 */
class ItemResponseBuilder
{
    /**
     * @var ItemResponse
     */
    private $instance;

    private function __construct(ItemResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Item Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ItemResponse());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new Item Response object.
     */
    public function build(): ItemResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
