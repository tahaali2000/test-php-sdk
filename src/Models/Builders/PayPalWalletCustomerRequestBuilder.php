<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\PayPalWalletCustomerRequest;
use PayPalRESTAPIsLib\Models\PhoneWithType;

/**
 * Builder for model PayPalWalletCustomerRequest
 *
 * @see PayPalWalletCustomerRequest
 */
class PayPalWalletCustomerRequestBuilder
{
    /**
     * @var PayPalWalletCustomerRequest
     */
    private $instance;

    private function __construct(PayPalWalletCustomerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Pay Pal Wallet Customer Request Builder object.
     */
    public static function init(): self
    {
        return new self(new PayPalWalletCustomerRequest());
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
     * Sets email address field.
     *
     * @param string|null $value
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets phone field.
     *
     * @param PhoneWithType|null $value
     */
    public function phone(?PhoneWithType $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets merchant customer id field.
     *
     * @param string|null $value
     */
    public function merchantCustomerId(?string $value): self
    {
        $this->instance->setMerchantCustomerId($value);
        return $this;
    }

    /**
     * Initializes a new Pay Pal Wallet Customer Request object.
     */
    public function build(): PayPalWalletCustomerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
