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

class ItemResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $message;

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Converts the ItemResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ItemResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ItemResponse',
            ['id' => $this->id, 'name' => $this->name, 'message' => $this->message]
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
        if (isset($this->id)) {
            $json['id']      = $this->id;
        }
        if (isset($this->name)) {
            $json['name']    = $this->name;
        }
        if (isset($this->message)) {
            $json['message'] = $this->message;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
