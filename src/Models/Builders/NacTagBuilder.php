<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\NacTag;

/**
 * Builder for model NacTag
 *
 * @see NacTag
 */
class NacTagBuilder
{
    /**
     * @var NacTag
     */
    private $instance;

    private function __construct(NacTag $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Nac Tag Builder object.
     *
     * @param string $name
     * @param NacTag $type
     */
    public static function init(string $name, NacTag $type): self
    {
        return new self(new NacTag($name, $type));
    }

    /**
     * Sets allow usermac override field.
     *
     * @param bool|null $value
     */
    public function allowUsermacOverride(?bool $value): self
    {
        $this->instance->setAllowUsermacOverride($value);
        return $this;
    }

    /**
     * Sets created time field.
     *
     * @param float|null $value
     */
    public function createdTime(?float $value): self
    {
        $this->instance->setCreatedTime($value);
        return $this;
    }

    /**
     * Sets egress vlan names field.
     *
     * @param string[]|null $value
     */
    public function egressVlanNames(?array $value): self
    {
        $this->instance->setEgressVlanNames($value);
        return $this;
    }

    /**
     * Sets gbp tag field.
     *
     * @param int|null $value
     */
    public function gbpTag(?int $value): self
    {
        $this->instance->setGbpTag($value);
        return $this;
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
     * Sets match field.
     *
     * @param NacTag|null $value
     */
    public function match(?NacTag $value): self
    {
        $this->instance->setMatch($value);
        return $this;
    }

    /**
     * Sets match all field.
     *
     * @param bool|null $value
     */
    public function matchAll(?bool $value): self
    {
        $this->instance->setMatchAll($value);
        return $this;
    }

    /**
     * Sets modified time field.
     *
     * @param float|null $value
     */
    public function modifiedTime(?float $value): self
    {
        $this->instance->setModifiedTime($value);
        return $this;
    }

    /**
     * Sets org id field.
     *
     * @param string|null $value
     */
    public function orgId(?string $value): self
    {
        $this->instance->setOrgId($value);
        return $this;
    }

    /**
     * Sets radius attrs field.
     *
     * @param string[]|null $value
     */
    public function radiusAttrs(?array $value): self
    {
        $this->instance->setRadiusAttrs($value);
        return $this;
    }

    /**
     * Sets radius group field.
     *
     * @param string|null $value
     */
    public function radiusGroup(?string $value): self
    {
        $this->instance->setRadiusGroup($value);
        return $this;
    }

    /**
     * Sets radius vendor attrs field.
     *
     * @param string[]|null $value
     */
    public function radiusVendorAttrs(?array $value): self
    {
        $this->instance->setRadiusVendorAttrs($value);
        return $this;
    }

    /**
     * Sets session timeout field.
     *
     * @param int|null $value
     */
    public function sessionTimeout(?int $value): self
    {
        $this->instance->setSessionTimeout($value);
        return $this;
    }

    /**
     * Sets username attr field.
     *
     * @param NacTag|null $value
     */
    public function usernameAttr(?NacTag $value): self
    {
        $this->instance->setUsernameAttr($value);
        return $this;
    }

    /**
     * Sets values field.
     *
     * @param string[]|null $value
     */
    public function values(?array $value): self
    {
        $this->instance->setValues($value);
        return $this;
    }

    /**
     * Sets vlan field.
     *
     * @param string|null $value
     */
    public function vlan(?string $value): self
    {
        $this->instance->setVlan($value);
        return $this;
    }

    /**
     * Initializes a new Nac Tag object.
     */
    public function build(): NacTag
    {
        return CoreHelper::clone($this->instance);
    }
}
