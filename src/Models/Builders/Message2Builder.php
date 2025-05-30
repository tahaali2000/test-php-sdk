<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\Message2;

/**
 * Builder for model Message2
 *
 * @see Message2
 */
class Message2Builder
{
    /**
     * @var Message2
     */
    private $instance;

    private function __construct(Message2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Message 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new Message2());
    }

    /**
     * Sets code field.
     *
     * @param int|null $value
     */
    public function code(?int $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets text field.
     *
     * @param string|null $value
     */
    public function text(?string $value): self
    {
        $this->instance->setText($value);
        return $this;
    }

    /**
     * Initializes a new Message 2 object.
     */
    public function build(): Message2
    {
        return CoreHelper::clone($this->instance);
    }
}
