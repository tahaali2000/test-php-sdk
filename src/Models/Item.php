<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models;

use CypressTestAPILib\ApiHelper;
use CypressTestAPILib\Utils\DateTimeHelper;
use stdClass;

class Item implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @var float
     */
    private $decimal;

    /**
     * @var int
     */
    private $long;

    /**
     * @var bool
     */
    private $bool;

    /**
     * @var string
     */
    private $customEnum;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $jsonObject;

    /**
     * @var array
     */
    private $animal;

    /**
     * @var array<string,Message>
     */
    private $map;

    /**
     * @param string $id
     * @param string $name
     * @param \DateTime $date
     * @param \DateTime $dateTime
     * @param float $decimal
     * @param int $long
     * @param bool $bool
     * @param string $customEnum
     * @param array $jsonObject
     * @param array $animal
     * @param array<string,Message> $map
     */
    public function __construct(
        string $id,
        string $name,
        \DateTime $date,
        \DateTime $dateTime,
        float $decimal,
        int $long,
        bool $bool,
        string $customEnum,
        array $jsonObject,
        array $animal,
        array $map
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->dateTime = $dateTime;
        $this->decimal = $decimal;
        $this->long = $long;
        $this->bool = $bool;
        $this->customEnum = $customEnum;
        $this->jsonObject = $jsonObject;
        $this->animal = $animal;
        $this->map = $map;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Date.
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Sets Date.
     *
     * @required
     * @maps date
     * @factory \CypressTestAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Date Time.
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * Sets Date Time.
     *
     * @required
     * @maps dateTime
     * @factory \CypressTestAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateTime(\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    /**
     * Returns Decimal.
     */
    public function getDecimal(): float
    {
        return $this->decimal;
    }

    /**
     * Sets Decimal.
     *
     * @required
     * @maps decimal
     */
    public function setDecimal(float $decimal): void
    {
        $this->decimal = $decimal;
    }

    /**
     * Returns Long.
     */
    public function getLong(): int
    {
        return $this->long;
    }

    /**
     * Sets Long.
     *
     * @required
     * @maps long
     */
    public function setLong(int $long): void
    {
        $this->long = $long;
    }

    /**
     * Returns Bool.
     */
    public function getBool(): bool
    {
        return $this->bool;
    }

    /**
     * Sets Bool.
     *
     * @required
     * @maps bool
     */
    public function setBool(bool $bool): void
    {
        $this->bool = $bool;
    }

    /**
     * Returns Custom Enum.
     */
    public function getCustomEnum(): string
    {
        return $this->customEnum;
    }

    /**
     * Sets Custom Enum.
     *
     * @required
     * @maps CustomEnum
     * @factory \CypressTestAPILib\Models\CustomEnum::checkValue
     */
    public function setCustomEnum(string $customEnum): void
    {
        $this->customEnum = $customEnum;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \CypressTestAPILib\Models\StatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Json Object.
     * A generic JSON object
     */
    public function getJsonObject(): array
    {
        return $this->jsonObject;
    }

    /**
     * Sets Json Object.
     * A generic JSON object
     *
     * @required
     * @maps jsonObject
     */
    public function setJsonObject(array $jsonObject): void
    {
        $this->jsonObject = $jsonObject;
    }

    /**
     * Returns Animal.
     */
    public function getAnimal(): array
    {
        return $this->animal;
    }

    /**
     * Sets Animal.
     *
     * @required
     * @maps Animal
     */
    public function setAnimal(array $animal): void
    {
        $this->animal = $animal;
    }

    /**
     * Returns Map.
     *
     * @return array<string,Message>
     */
    public function getMap(): array
    {
        return $this->map;
    }

    /**
     * Sets Map.
     *
     * @required
     * @maps Map
     *
     * @param array<string,Message> $map
     */
    public function setMap(array $map): void
    {
        $this->map = $map;
    }

    /**
     * Converts the Item object to a human-readable string representation.
     *
     * @return string The string representation of the Item object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Item',
            [
                'id' => $this->id,
                'name' => $this->name,
                'date' => $this->date,
                'dateTime' => $this->dateTime,
                'decimal' => $this->decimal,
                'long' => $this->long,
                'bool' => $this->bool,
                'customEnum' => $this->customEnum,
                'status' => $this->status,
                'jsonObject' => $this->jsonObject,
                'animal' => $this->animal,
                'map' => $this->map
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
        $json['id']         = $this->id;
        $json['name']       = $this->name;
        $json['date']       = DateTimeHelper::toSimpleDate($this->date);
        $json['dateTime']   = DateTimeHelper::toRfc3339DateTime($this->dateTime);
        $json['decimal']    = $this->decimal;
        $json['long']       = $this->long;
        $json['bool']       = $this->bool;
        $json['CustomEnum'] = CustomEnum::checkValue($this->customEnum);
        if (isset($this->status)) {
            $json['status'] = StatusEnum::checkValue($this->status);
        }
        $json['jsonObject'] = $this->jsonObject;
        $json['Animal']     = $this->animal;
        $json['Map']        = $this->map;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
