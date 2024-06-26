<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [VmwareEngine.ListHcxActivationKeys][google.cloud.vmwareengine.v1.VmwareEngine.ListHcxActivationKeys]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.ListHcxActivationKeysResponse</code>
 */
class ListHcxActivationKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of HCX activation keys.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.HcxActivationKey hcx_activation_keys = 1;</code>
     */
    private $hcx_activation_keys;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached when making an aggregated query using
     * wildcards.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VmwareEngine\V1\HcxActivationKey>|\Google\Protobuf\Internal\RepeatedField $hcx_activation_keys
     *           List of HCX activation keys.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached when making an aggregated query using
     *           wildcards.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * List of HCX activation keys.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.HcxActivationKey hcx_activation_keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHcxActivationKeys()
    {
        return $this->hcx_activation_keys;
    }

    /**
     * List of HCX activation keys.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.HcxActivationKey hcx_activation_keys = 1;</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\HcxActivationKey>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHcxActivationKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\HcxActivationKey::class);
        $this->hcx_activation_keys = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached when making an aggregated query using
     * wildcards.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached when making an aggregated query using
     * wildcards.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

