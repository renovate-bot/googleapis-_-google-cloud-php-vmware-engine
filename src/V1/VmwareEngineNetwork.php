<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VMware Engine network resource that provides connectivity for VMware Engine
 * private clouds.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.VmwareEngineNetwork</code>
 */
class VmwareEngineNetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the VMware Engine network.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/global/vmwareEngineNetworks/my-network`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Creation time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Last update time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * User-provided description for this VMware Engine network.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Output only. VMware Engine service VPC networks that provide connectivity
     * from a private cloud to customer projects, the internet, and other Google
     * Cloud services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork vpc_networks = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vpc_networks;
    /**
     * Output only. State of the VMware Engine network.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Required. VMware Engine network type.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.Type type = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Checksum that may be sent on update and delete requests to ensure that the
     * user-provided value is up to date before the server processes a request.
     * The server computes checksums based on the value of other fields in the
     * request.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the VMware Engine network.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/global/vmwareEngineNetworks/my-network`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of this resource.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update time of this resource.
     *     @type string $description
     *           User-provided description for this VMware Engine network.
     *     @type array<\Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\VpcNetwork>|\Google\Protobuf\Internal\RepeatedField $vpc_networks
     *           Output only. VMware Engine service VPC networks that provide connectivity
     *           from a private cloud to customer projects, the internet, and other Google
     *           Cloud services.
     *     @type int $state
     *           Output only. State of the VMware Engine network.
     *     @type int $type
     *           Required. VMware Engine network type.
     *     @type string $uid
     *           Output only. System-generated unique identifier for the resource.
     *     @type string $etag
     *           Checksum that may be sent on update and delete requests to ensure that the
     *           user-provided value is up to date before the server processes a request.
     *           The server computes checksums based on the value of other fields in the
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the VMware Engine network.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/global/vmwareEngineNetworks/my-network`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the VMware Engine network.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/global/vmwareEngineNetworks/my-network`
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
     * Output only. Creation time of this resource.
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
     * Output only. Creation time of this resource.
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
     * Output only. Last update time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Last update time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * User-provided description for this VMware Engine network.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User-provided description for this VMware Engine network.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. VMware Engine service VPC networks that provide connectivity
     * from a private cloud to customer projects, the internet, and other Google
     * Cloud services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork vpc_networks = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVpcNetworks()
    {
        return $this->vpc_networks;
    }

    /**
     * Output only. VMware Engine service VPC networks that provide connectivity
     * from a private cloud to customer projects, the internet, and other Google
     * Cloud services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork vpc_networks = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\VpcNetwork>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVpcNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\VpcNetwork::class);
        $this->vpc_networks = $arr;

        return $this;
    }

    /**
     * Output only. State of the VMware Engine network.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the VMware Engine network.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. VMware Engine network type.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.Type type = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. VMware Engine network type.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.Type type = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Checksum that may be sent on update and delete requests to ensure that the
     * user-provided value is up to date before the server processes a request.
     * The server computes checksums based on the value of other fields in the
     * request.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Checksum that may be sent on update and delete requests to ensure that the
     * user-provided value is up to date before the server processes a request.
     * The server computes checksums based on the value of other fields in the
     * request.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

