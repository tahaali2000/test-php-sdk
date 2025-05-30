<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\Deer;

/**
 * Builder for model Deer
 *
 * @see Deer
 */
class DeerBuilder
{
    /**
     * @var Deer
     */
    private $instance;

    private function __construct(Deer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Deer Builder object.
     *
     * @param string $name
     * @param string $type
     */
    public static function init(string $name, string $type): self
    {
        return new self(new Deer($name, $type));
    }

    /**
     * Initializes a new Deer object.
     */
    public function build(): Deer
    {
        return CoreHelper::clone($this->instance);
    }
}
