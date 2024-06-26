<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HCX activation key. A default key is created during
 * private cloud provisioning, but this behavior is subject to change
 * and you should always verify active keys.
 * Use
 * [VmwareEngine.ListHcxActivationKeys][google.cloud.vmwareengine.v1.VmwareEngine.ListHcxActivationKeys]
 * to retrieve existing keys and
 * [VmwareEngine.CreateHcxActivationKey][google.cloud.vmwareengine.v1.VmwareEngine.CreateHcxActivationKey]
 * to create new ones.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.HcxActivationKey</code>
 */
class HcxActivationKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this HcxActivationKey.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1/privateClouds/my-cloud/hcxActivationKeys/my-key`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Creation time of HCX activation key.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. State of HCX activation key.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.HcxActivationKey.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. HCX activation key.
     *
     * Generated from protobuf field <code>string activation_key = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $activation_key = '';
    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this HcxActivationKey.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1/privateClouds/my-cloud/hcxActivationKeys/my-key`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of HCX activation key.
     *     @type int $state
     *           Output only. State of HCX activation key.
     *     @type string $activation_key
     *           Output only. HCX activation key.
     *     @type string $uid
     *           Output only. System-generated unique identifier for the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this HcxActivationKey.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1/privateClouds/my-cloud/hcxActivationKeys/my-key`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this HcxActivationKey.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1/privateClouds/my-cloud/hcxActivationKeys/my-key`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Creation time of HCX activation key.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Creation time of HCX activation key.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. State of HCX activation key.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.HcxActivationKey.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of HCX activation key.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.HcxActivationKey.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\HcxActivationKey\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. HCX activation key.
     *
     * Generated from protobuf field <code>string activation_key = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getActivationKey()
    {
        return $this->activation_key;
    }

    /**
     * Output only. HCX activation key.
     *
     * Generated from protobuf field <code>string activation_key = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setActivationKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_key = $var;

        return $this;
    }

    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

}

