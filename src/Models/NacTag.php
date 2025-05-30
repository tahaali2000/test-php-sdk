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

class NacTag implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $allowUsermacOverride = false;

    /**
     * @var float|null
     */
    private $createdTime;

    /**
     * @var string[]|null
     */
    private $egressVlanNames;

    /**
     * @var int|null
     */
    private $gbpTag;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var NacTag|null
     */
    private $match;

    /**
     * @var bool|null
     */
    private $matchAll = false;

    /**
     * @var float|null
     */
    private $modifiedTime;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $orgId;

    /**
     * @var string[]|null
     */
    private $radiusAttrs;

    /**
     * @var string|null
     */
    private $radiusGroup;

    /**
     * @var string[]|null
     */
    private $radiusVendorAttrs;

    /**
     * @var int|null
     */
    private $sessionTimeout;

    /**
     * @var NacTag
     */
    private $type;

    /**
     * @var NacTag|null
     */
    private $usernameAttr;

    /**
     * @var string[]|null
     */
    private $values;

    /**
     * @var string|null
     */
    private $vlan;

    /**
     * @param string $name
     * @param NacTag $type
     */
    public function __construct(string $name, NacTag $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Returns Allow Usermac Override.
     * can be set to true to allow the override by usermac result
     */
    public function getAllowUsermacOverride(): ?bool
    {
        return $this->allowUsermacOverride;
    }

    /**
     * Sets Allow Usermac Override.
     * can be set to true to allow the override by usermac result
     *
     * @maps allow_usermac_override
     */
    public function setAllowUsermacOverride(?bool $allowUsermacOverride): void
    {
        $this->allowUsermacOverride = $allowUsermacOverride;
    }

    /**
     * Returns Created Time.
     */
    public function getCreatedTime(): ?float
    {
        return $this->createdTime;
    }

    /**
     * Sets Created Time.
     *
     * @maps created_time
     */
    public function setCreatedTime(?float $createdTime): void
    {
        $this->createdTime = $createdTime;
    }

    /**
     * Returns Egress Vlan Names.
     * if `type`==`egress_vlan_names`, list of egress vlans to return
     *
     * @return string[]|null
     */
    public function getEgressVlanNames(): ?array
    {
        return $this->egressVlanNames;
    }

    /**
     * Sets Egress Vlan Names.
     * if `type`==`egress_vlan_names`, list of egress vlans to return
     *
     * @maps egress_vlan_names
     *
     * @param string[]|null $egressVlanNames
     */
    public function setEgressVlanNames(?array $egressVlanNames): void
    {
        $this->egressVlanNames = $egressVlanNames;
    }

    /**
     * Returns Gbp Tag.
     * if `type`==`gbp_tag`
     */
    public function getGbpTag(): ?int
    {
        return $this->gbpTag;
    }

    /**
     * Sets Gbp Tag.
     * if `type`==`gbp_tag`
     *
     * @maps gbp_tag
     */
    public function setGbpTag(?int $gbpTag): void
    {
        $this->gbpTag = $gbpTag;
    }

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
     * Returns Match.
     */
    public function getMatch(): ?NacTag
    {
        return $this->match;
    }

    /**
     * Sets Match.
     *
     * @maps match
     */
    public function setMatch(?NacTag $match): void
    {
        $this->match = $match;
    }

    /**
     * Returns Match All.
     * This field is applicable only when `type`==`match`
     * * `false`: means it is sufficient to match any of the values (i.e., match-any behavior)
     * * `true`: means all values should be matched (i.e., match-all behavior)
     *
     *
     * Currently it makes sense to set this field to `true` only if the `match`==`idp_role` or
     * `match`==`usermac_label`'
     */
    public function getMatchAll(): ?bool
    {
        return $this->matchAll;
    }

    /**
     * Sets Match All.
     * This field is applicable only when `type`==`match`
     * * `false`: means it is sufficient to match any of the values (i.e., match-any behavior)
     * * `true`: means all values should be matched (i.e., match-all behavior)
     *
     *
     * Currently it makes sense to set this field to `true` only if the `match`==`idp_role` or
     * `match`==`usermac_label`'
     *
     * @maps match_all
     */
    public function setMatchAll(?bool $matchAll): void
    {
        $this->matchAll = $matchAll;
    }

    /**
     * Returns Modified Time.
     */
    public function getModifiedTime(): ?float
    {
        return $this->modifiedTime;
    }

    /**
     * Sets Modified Time.
     *
     * @maps modified_time
     */
    public function setModifiedTime(?float $modifiedTime): void
    {
        $this->modifiedTime = $modifiedTime;
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
     * Returns Org Id.
     */
    public function getOrgId(): ?string
    {
        return $this->orgId;
    }

    /**
     * Sets Org Id.
     *
     * @maps org_id
     */
    public function setOrgId(?string $orgId): void
    {
        $this->orgId = $orgId;
    }

    /**
     * Returns Radius Attrs.
     * if `type`==`radius_attrs`, user can specify a list of one or more standard attributes in the field
     * "radius_attrs".
     * It is the responsibility of the user to provide a syntactically correct string, otherwise it may not
     * work as expected.
     * Note that it is allowed to have more than one radius_attrs in the result of a given rule.
     *
     * @return string[]|null
     */
    public function getRadiusAttrs(): ?array
    {
        return $this->radiusAttrs;
    }

    /**
     * Sets Radius Attrs.
     * if `type`==`radius_attrs`, user can specify a list of one or more standard attributes in the field
     * "radius_attrs".
     * It is the responsibility of the user to provide a syntactically correct string, otherwise it may not
     * work as expected.
     * Note that it is allowed to have more than one radius_attrs in the result of a given rule.
     *
     * @maps radius_attrs
     *
     * @param string[]|null $radiusAttrs
     */
    public function setRadiusAttrs(?array $radiusAttrs): void
    {
        $this->radiusAttrs = $radiusAttrs;
    }

    /**
     * Returns Radius Group.
     * if `type`==`radius_group`
     */
    public function getRadiusGroup(): ?string
    {
        return $this->radiusGroup;
    }

    /**
     * Sets Radius Group.
     * if `type`==`radius_group`
     *
     * @maps radius_group
     */
    public function setRadiusGroup(?string $radiusGroup): void
    {
        $this->radiusGroup = $radiusGroup;
    }

    /**
     * Returns Radius Vendor Attrs.
     * if `type`==`radius_vendor_attrs`, user can specify a list of one or more vendor-specific attributes
     * in the field "radius_vendor_attrs".
     * It is the responsibility of the user to provide a syntactically correct string, otherwise it may not
     * work as expected.
     * Note that it is allowed to have more than one radius_vendor_attrs in the result of a given rule.
     *
     * @return string[]|null
     */
    public function getRadiusVendorAttrs(): ?array
    {
        return $this->radiusVendorAttrs;
    }

    /**
     * Sets Radius Vendor Attrs.
     * if `type`==`radius_vendor_attrs`, user can specify a list of one or more vendor-specific attributes
     * in the field "radius_vendor_attrs".
     * It is the responsibility of the user to provide a syntactically correct string, otherwise it may not
     * work as expected.
     * Note that it is allowed to have more than one radius_vendor_attrs in the result of a given rule.
     *
     * @maps radius_vendor_attrs
     *
     * @param string[]|null $radiusVendorAttrs
     */
    public function setRadiusVendorAttrs(?array $radiusVendorAttrs): void
    {
        $this->radiusVendorAttrs = $radiusVendorAttrs;
    }

    /**
     * Returns Session Timeout.
     * if `type`==`session_timeout, in seconds
     */
    public function getSessionTimeout(): ?int
    {
        return $this->sessionTimeout;
    }

    /**
     * Sets Session Timeout.
     * if `type`==`session_timeout, in seconds
     *
     * @maps session_timeout
     */
    public function setSessionTimeout(?int $sessionTimeout): void
    {
        $this->sessionTimeout = $sessionTimeout;
    }

    /**
     * Returns Type.
     */
    public function getType(): NacTag
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(NacTag $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Username Attr.
     */
    public function getUsernameAttr(): ?NacTag
    {
        return $this->usernameAttr;
    }

    /**
     * Sets Username Attr.
     *
     * @maps username_attr
     */
    public function setUsernameAttr(?NacTag $usernameAttr): void
    {
        $this->usernameAttr = $usernameAttr;
    }

    /**
     * Returns Values.
     * if `type`==`match`
     *
     * @return string[]|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * Sets Values.
     * if `type`==`match`
     *
     * @maps values
     *
     * @param string[]|null $values
     */
    public function setValues(?array $values): void
    {
        $this->values = $values;
    }

    /**
     * Returns Vlan.
     * if `type`==`vlan`
     */
    public function getVlan(): ?string
    {
        return $this->vlan;
    }

    /**
     * Sets Vlan.
     * if `type`==`vlan`
     *
     * @maps vlan
     */
    public function setVlan(?string $vlan): void
    {
        $this->vlan = $vlan;
    }

    /**
     * Converts the NacTag object to a human-readable string representation.
     *
     * @return string The string representation of the NacTag object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'NacTag',
            [
                'allowUsermacOverride' => $this->allowUsermacOverride,
                'createdTime' => $this->createdTime,
                'egressVlanNames' => $this->egressVlanNames,
                'gbpTag' => $this->gbpTag,
                'id' => $this->id,
                'match' => $this->match,
                'matchAll' => $this->matchAll,
                'modifiedTime' => $this->modifiedTime,
                'name' => $this->name,
                'orgId' => $this->orgId,
                'radiusAttrs' => $this->radiusAttrs,
                'radiusGroup' => $this->radiusGroup,
                'radiusVendorAttrs' => $this->radiusVendorAttrs,
                'sessionTimeout' => $this->sessionTimeout,
                'type' => $this->type,
                'usernameAttr' => $this->usernameAttr,
                'values' => $this->values,
                'vlan' => $this->vlan
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
        if (isset($this->allowUsermacOverride)) {
            $json['allow_usermac_override'] = $this->allowUsermacOverride;
        }
        if (isset($this->createdTime)) {
            $json['created_time']           = $this->createdTime;
        }
        if (isset($this->egressVlanNames)) {
            $json['egress_vlan_names']      = $this->egressVlanNames;
        }
        if (isset($this->gbpTag)) {
            $json['gbp_tag']                = $this->gbpTag;
        }
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->match)) {
            $json['match']                  = $this->match;
        }
        if (isset($this->matchAll)) {
            $json['match_all']              = $this->matchAll;
        }
        if (isset($this->modifiedTime)) {
            $json['modified_time']          = $this->modifiedTime;
        }
        $json['name']                       = $this->name;
        if (isset($this->orgId)) {
            $json['org_id']                 = $this->orgId;
        }
        if (isset($this->radiusAttrs)) {
            $json['radius_attrs']           = $this->radiusAttrs;
        }
        if (isset($this->radiusGroup)) {
            $json['radius_group']           = $this->radiusGroup;
        }
        if (isset($this->radiusVendorAttrs)) {
            $json['radius_vendor_attrs']    = $this->radiusVendorAttrs;
        }
        if (isset($this->sessionTimeout)) {
            $json['session_timeout']        = $this->sessionTimeout;
        }
        $json['type']                       = $this->type;
        if (isset($this->usernameAttr)) {
            $json['username_attr']          = $this->usernameAttr;
        }
        if (isset($this->values)) {
            $json['values']                 = $this->values;
        }
        if (isset($this->vlan)) {
            $json['vlan']                   = $this->vlan;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
