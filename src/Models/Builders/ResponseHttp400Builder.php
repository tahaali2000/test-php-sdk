<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\ResponseHttp400;

/**
 * Builder for model ResponseHttp400
 *
 * @see ResponseHttp400
 */
class ResponseHttp400Builder
{
    /**
     * @var ResponseHttp400
     */
    private $instance;

    private function __construct(ResponseHttp400 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Http 400 Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseHttp400());
    }

    /**
     * Sets detail field.
     *
     * @param string|null $value
     */
    public function detail(?string $value): self
    {
        $this->instance->setDetail($value);
        return $this;
    }

    /**
     * Initializes a new Response Http 400 object.
     */
    public function build(): ResponseHttp400
    {
        return CoreHelper::clone($this->instance);
    }
}
