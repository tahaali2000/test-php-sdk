<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\Item;
use CypressTestAPILib\Models\Message;

/**
 * Builder for model Item
 *
 * @see Item
 */
class ItemBuilder
{
    /**
     * @var Item
     */
    private $instance;

    private function __construct(Item $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Item Builder object.
     *
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
    public static function init(
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
    ): self {
        return new self(
            new Item($id, $name, $date, $dateTime, $decimal, $long, $bool, $customEnum, $jsonObject, $animal, $map)
        );
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new Item object.
     */
    public function build(): Item
    {
        return CoreHelper::clone($this->instance);
    }
}
