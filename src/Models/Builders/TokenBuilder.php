<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\Token;

/**
 * Builder for model Token
 *
 * @see Token
 */
class TokenBuilder
{
    /**
     * @var Token
     */
    private $instance;

    private function __construct(Token $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Builder object.
     *
     * @param string $id
     * @param string $type
     */
    public static function init(string $id, string $type): self
    {
        return new self(new Token($id, $type));
    }

    /**
     * Initializes a new Token object.
     */
    public function build(): Token
    {
        return CoreHelper::clone($this->instance);
    }
}
