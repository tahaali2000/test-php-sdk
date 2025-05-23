<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use PayPalRESTAPIsLib\ApiHelper;
use stdClass;

/**
 * The Third Party Network token used to fund a payment.
 */
class NetworkToken implements \JsonSerializable
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $expiry;

    /**
     * @var string|null
     */
    private $cryptogram;

    /**
     * @var string|null
     */
    private $eciFlag;

    /**
     * @var string|null
     */
    private $tokenRequestorId;

    /**
     * @param string $number
     * @param string $expiry
     */
    public function __construct(string $number, string $expiry)
    {
        $this->number = $number;
        $this->expiry = $expiry;
    }

    /**
     * Returns Number.
     * Third party network token number.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     * Third party network token number.
     *
     * @required
     * @maps number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     */
    public function getExpiry(): string
    {
        return $this->expiry;
    }

    /**
     * Sets Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @required
     * @maps expiry
     */
    public function setExpiry(string $expiry): void
    {
        $this->expiry = $expiry;
    }

    /**
     * Returns Cryptogram.
     * An Encrypted one-time use value that's sent along with Network Token. This field is not required to
     * be present for recurring transactions.
     */
    public function getCryptogram(): ?string
    {
        return $this->cryptogram;
    }

    /**
     * Sets Cryptogram.
     * An Encrypted one-time use value that's sent along with Network Token. This field is not required to
     * be present for recurring transactions.
     *
     * @maps cryptogram
     */
    public function setCryptogram(?string $cryptogram): void
    {
        $this->cryptogram = $cryptogram;
    }

    /**
     * Returns Eci Flag.
     * Electronic Commerce Indicator (ECI). The ECI value is part of the 2 data elements that indicate the
     * transaction was processed electronically. This should be passed on the authorization transaction to
     * the Gateway/Processor.
     */
    public function getEciFlag(): ?string
    {
        return $this->eciFlag;
    }

    /**
     * Sets Eci Flag.
     * Electronic Commerce Indicator (ECI). The ECI value is part of the 2 data elements that indicate the
     * transaction was processed electronically. This should be passed on the authorization transaction to
     * the Gateway/Processor.
     *
     * @maps eci_flag
     */
    public function setEciFlag(?string $eciFlag): void
    {
        $this->eciFlag = $eciFlag;
    }

    /**
     * Returns Token Requestor Id.
     * A TRID, or a Token Requestor ID, is an identifier used by merchants to request network tokens from
     * card networks. A TRID is a precursor to obtaining a network token for a credit card primary account
     * number (PAN), and will aid in enabling secure card on file (COF) payments and reducing fraud.
     */
    public function getTokenRequestorId(): ?string
    {
        return $this->tokenRequestorId;
    }

    /**
     * Sets Token Requestor Id.
     * A TRID, or a Token Requestor ID, is an identifier used by merchants to request network tokens from
     * card networks. A TRID is a precursor to obtaining a network token for a credit card primary account
     * number (PAN), and will aid in enabling secure card on file (COF) payments and reducing fraud.
     *
     * @maps token_requestor_id
     */
    public function setTokenRequestorId(?string $tokenRequestorId): void
    {
        $this->tokenRequestorId = $tokenRequestorId;
    }

    /**
     * Converts the NetworkToken object to a human-readable string representation.
     *
     * @return string The string representation of the NetworkToken object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'NetworkToken',
            [
                'number' => $this->number,
                'expiry' => $this->expiry,
                'cryptogram' => $this->cryptogram,
                'eciFlag' => $this->eciFlag,
                'tokenRequestorId' => $this->tokenRequestorId
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['number']                 = $this->number;
        $json['expiry']                 = $this->expiry;
        if (isset($this->cryptogram)) {
            $json['cryptogram']         = $this->cryptogram;
        }
        if (isset($this->eciFlag)) {
            $json['eci_flag']           = $this->eciFlag;
        }
        if (isset($this->tokenRequestorId)) {
            $json['token_requestor_id'] = $this->tokenRequestorId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
