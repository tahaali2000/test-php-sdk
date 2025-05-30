<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models;

use CypressTestAPILib\ApiHelper;
use stdClass;

class Message implements \JsonSerializable
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $text;

    /**
     * @param int $code
     * @param string $text
     */
    public function __construct(int $code, string $text)
    {
        $this->code = $code;
        $this->text = $text;
    }

    /**
     * Returns Code.
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @required
     * @maps code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Text.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Sets Text.
     *
     * @required
     * @maps text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * Converts the Message object to a human-readable string representation.
     *
     * @return string The string representation of the Message object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Message', ['code' => $this->code, 'text' => $this->text]);
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
        $json['code'] = $this->code;
        $json['text'] = $this->text;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
