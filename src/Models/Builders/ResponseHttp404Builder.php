<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\ResponseHttp404;

/**
 * Builder for model ResponseHttp404
 *
 * @see ResponseHttp404
 */
class ResponseHttp404Builder
{
    /**
     * @var ResponseHttp404
     */
    private $instance;

    private function __construct(ResponseHttp404 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Http 404 Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseHttp404());
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
     * Initializes a new Response Http 404 object.
     */
    public function build(): ResponseHttp404
    {
        return CoreHelper::clone($this->instance);
    }
}
