<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a private cloud resource. Private clouds of type `STANDARD` and
 * `TIME_LIMITED` are zonal resources, `STRETCHED` private clouds are
 * regional.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.PrivateCloud</code>
 */
class PrivateCloud extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this private cloud.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
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
     * Output only. Time when the resource was scheduled for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_time = null;
    /**
     * Output only. Time when the resource will be irreversibly deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;
    /**
     * Output only. State of the resource. New values may be added to this enum
     * when appropriate.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Required. Network configuration of the private cloud.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NetworkConfig network_config = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_config = null;
    /**
     * Required. Input only. The management cluster for this private cloud.
     * This field is required during creation of the private cloud to provide
     * details for the default cluster.
     * The following fields can't be changed after private cloud creation:
     * `ManagementCluster.clusterId`, `ManagementCluster.nodeTypeId`.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.ManagementCluster management_cluster = 10 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $management_cluster = null;
    /**
     * User-provided description for this private cloud.
     *
     * Generated from protobuf field <code>string description = 11;</code>
     */
    protected $description = '';
    /**
     * Output only. HCX appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Hcx hcx = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hcx = null;
    /**
     * Output only. NSX appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Nsx nsx = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $nsx = null;
    /**
     * Output only. Vcenter appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Vcenter vcenter = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $vcenter = null;
    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Optional. Type of the private cloud. Defaults to STANDARD.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.Type type = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this private cloud.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of this resource.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update time of this resource.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. Time when the resource was scheduled for deletion.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. Time when the resource will be irreversibly deleted.
     *     @type int $state
     *           Output only. State of the resource. New values may be added to this enum
     *           when appropriate.
     *     @type \Google\Cloud\VmwareEngine\V1\NetworkConfig $network_config
     *           Required. Network configuration of the private cloud.
     *     @type \Google\Cloud\VmwareEngine\V1\PrivateCloud\ManagementCluster $management_cluster
     *           Required. Input only. The management cluster for this private cloud.
     *           This field is required during creation of the private cloud to provide
     *           details for the default cluster.
     *           The following fields can't be changed after private cloud creation:
     *           `ManagementCluster.clusterId`, `ManagementCluster.nodeTypeId`.
     *     @type string $description
     *           User-provided description for this private cloud.
     *     @type \Google\Cloud\VmwareEngine\V1\Hcx $hcx
     *           Output only. HCX appliance.
     *     @type \Google\Cloud\VmwareEngine\V1\Nsx $nsx
     *           Output only. NSX appliance.
     *     @type \Google\Cloud\VmwareEngine\V1\Vcenter $vcenter
     *           Output only. Vcenter appliance.
     *     @type string $uid
     *           Output only. System-generated unique identifier for the resource.
     *     @type int $type
     *           Optional. Type of the private cloud. Defaults to STANDARD.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this private cloud.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this private cloud.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
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
     * Output only. Time when the resource was scheduled for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. Time when the resource was scheduled for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the resource will be irreversibly deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. Time when the resource will be irreversibly deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only. State of the resource. New values may be added to this enum
     * when appropriate.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the resource. New values may be added to this enum
     * when appropriate.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\PrivateCloud\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. Network configuration of the private cloud.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NetworkConfig network_config = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\NetworkConfig|null
     */
    public function getNetworkConfig()
    {
        return $this->network_config;
    }

    public function hasNetworkConfig()
    {
        return isset($this->network_config);
    }

    public function clearNetworkConfig()
    {
        unset($this->network_config);
    }

    /**
     * Required. Network configuration of the private cloud.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NetworkConfig network_config = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\NetworkConfig $var
     * @return $this
     */
    public function setNetworkConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\NetworkConfig::class);
        $this->network_config = $var;

        return $this;
    }

    /**
     * Required. Input only. The management cluster for this private cloud.
     * This field is required during creation of the private cloud to provide
     * details for the default cluster.
     * The following fields can't be changed after private cloud creation:
     * `ManagementCluster.clusterId`, `ManagementCluster.nodeTypeId`.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.ManagementCluster management_cluster = 10 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\PrivateCloud\ManagementCluster|null
     */
    public function getManagementCluster()
    {
        return $this->management_cluster;
    }

    public function hasManagementCluster()
    {
        return isset($this->management_cluster);
    }

    public function clearManagementCluster()
    {
        unset($this->management_cluster);
    }

    /**
     * Required. Input only. The management cluster for this private cloud.
     * This field is required during creation of the private cloud to provide
     * details for the default cluster.
     * The following fields can't be changed after private cloud creation:
     * `ManagementCluster.clusterId`, `ManagementCluster.nodeTypeId`.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.ManagementCluster management_cluster = 10 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\PrivateCloud\ManagementCluster $var
     * @return $this
     */
    public function setManagementCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\PrivateCloud\ManagementCluster::class);
        $this->management_cluster = $var;

        return $this;
    }

    /**
     * User-provided description for this private cloud.
     *
     * Generated from protobuf field <code>string description = 11;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User-provided description for this private cloud.
     *
     * Generated from protobuf field <code>string description = 11;</code>
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
     * Output only. HCX appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Hcx hcx = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VmwareEngine\V1\Hcx|null
     */
    public function getHcx()
    {
        return $this->hcx;
    }

    public function hasHcx()
    {
        return isset($this->hcx);
    }

    public function clearHcx()
    {
        unset($this->hcx);
    }

    /**
     * Output only. HCX appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Hcx hcx = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VmwareEngine\V1\Hcx $var
     * @return $this
     */
    public function setHcx($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\Hcx::class);
        $this->hcx = $var;

        return $this;
    }

    /**
     * Output only. NSX appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Nsx nsx = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VmwareEngine\V1\Nsx|null
     */
    public function getNsx()
    {
        return $this->nsx;
    }

    public function hasNsx()
    {
        return isset($this->nsx);
    }

    public function clearNsx()
    {
        unset($this->nsx);
    }

    /**
     * Output only. NSX appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Nsx nsx = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VmwareEngine\V1\Nsx $var
     * @return $this
     */
    public function setNsx($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\Nsx::class);
        $this->nsx = $var;

        return $this;
    }

    /**
     * Output only. Vcenter appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Vcenter vcenter = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VmwareEngine\V1\Vcenter|null
     */
    public function getVcenter()
    {
        return $this->vcenter;
    }

    public function hasVcenter()
    {
        return isset($this->vcenter);
    }

    public function clearVcenter()
    {
        unset($this->vcenter);
    }

    /**
     * Output only. Vcenter appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Vcenter vcenter = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VmwareEngine\V1\Vcenter $var
     * @return $this
     */
    public function setVcenter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\Vcenter::class);
        $this->vcenter = $var;

        return $this;
    }

    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System-generated unique identifier for the resource.
     *
     * Generated from protobuf field <code>string uid = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Type of the private cloud. Defaults to STANDARD.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.Type type = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Type of the private cloud. Defaults to STANDARD.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateCloud.Type type = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\PrivateCloud\Type::class);
        $this->type = $var;

        return $this;
    }

}

