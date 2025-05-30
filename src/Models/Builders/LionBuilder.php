<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\Lion;

/**
 * Builder for model Lion
 *
 * @see Lion
 */
class LionBuilder
{
    /**
     * @var Lion
     */
    private $instance;

    private function __construct(Lion $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Lion Builder object.
     *
     * @param string $id
     * @param string $type
     */
    public static function init(string $id, string $type): self
    {
        return new self(new Lion($id, $type));
    }

    /**
     * Initializes a new Lion object.
     */
    public function build(): Lion
    {
        return CoreHelper::clone($this->instance);
    }
}
