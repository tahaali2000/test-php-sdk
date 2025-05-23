<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\LinkDescription;

/**
 * Builder for model LinkDescription
 *
 * @see LinkDescription
 */
class LinkDescriptionBuilder
{
    /**
     * @var LinkDescription
     */
    private $instance;

    private function __construct(LinkDescription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Link Description Builder object.
     *
     * @param string $href
     * @param string $rel
     */
    public static function init(string $href, string $rel): self
    {
        return new self(new LinkDescription($href, $rel));
    }

    /**
     * Sets method field.
     *
     * @param string|null $value
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Initializes a new Link Description object.
     */
    public function build(): LinkDescription
    {
        return CoreHelper::clone($this->instance);
    }
}
