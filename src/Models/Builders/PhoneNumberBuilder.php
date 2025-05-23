<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\PhoneNumber;

/**
 * Builder for model PhoneNumber
 *
 * @see PhoneNumber
 */
class PhoneNumberBuilder
{
    /**
     * @var PhoneNumber
     */
    private $instance;

    private function __construct(PhoneNumber $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Phone Number Builder object.
     *
     * @param string $nationalNumber
     */
    public static function init(string $nationalNumber): self
    {
        return new self(new PhoneNumber($nationalNumber));
    }

    /**
     * Initializes a new Phone Number object.
     */
    public function build(): PhoneNumber
    {
        return CoreHelper::clone($this->instance);
    }
}
