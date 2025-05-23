<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\TrustlyPaymentObject;

/**
 * Builder for model TrustlyPaymentObject
 *
 * @see TrustlyPaymentObject
 */
class TrustlyPaymentObjectBuilder
{
    /**
     * @var TrustlyPaymentObject
     */
    private $instance;

    private function __construct(TrustlyPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Trustly Payment Object Builder object.
     */
    public static function init(): self
    {
        return new self(new TrustlyPaymentObject());
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
     * Sets country code field.
     *
     * @param string|null $value
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets bic field.
     *
     * @param string|null $value
     */
    public function bic(?string $value): self
    {
        $this->instance->setBic($value);
        return $this;
    }

    /**
     * Sets iban last chars field.
     *
     * @param string|null $value
     */
    public function ibanLastChars(?string $value): self
    {
        $this->instance->setIbanLastChars($value);
        return $this;
    }

    /**
     * Initializes a new Trustly Payment Object object.
     */
    public function build(): TrustlyPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
