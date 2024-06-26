<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of a stretched cluster.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.StretchedClusterConfig</code>
 */
class StretchedClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Zone that will remain operational when connection between the two
     * zones is lost. Specify the resource name of a zone that belongs to the
     * region of the private cloud. For example:
     * `projects/{project}/locations/europe-west3-a` where `{project}` can either
     * be a project number or a project ID.
     *
     * Generated from protobuf field <code>string preferred_location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $preferred_location = '';
    /**
     * Required. Additional zone for a higher level of availability and load
     * balancing. Specify the resource name of a zone that belongs to the region
     * of the private cloud. For example:
     * `projects/{project}/locations/europe-west3-b` where `{project}` can either
     * be a project number or a project ID.
     *
     * Generated from protobuf field <code>string secondary_location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $secondary_location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $preferred_location
     *           Required. Zone that will remain operational when connection between the two
     *           zones is lost. Specify the resource name of a zone that belongs to the
     *           region of the private cloud. For example:
     *           `projects/{project}/locations/europe-west3-a` where `{project}` can either
     *           be a project number or a project ID.
     *     @type string $secondary_location
     *           Required. Additional zone for a higher level of availability and load
     *           balancing. Specify the resource name of a zone that belongs to the region
     *           of the private cloud. For example:
     *           `projects/{project}/locations/europe-west3-b` where `{project}` can either
     *           be a project number or a project ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Zone that will remain operational when connection between the two
     * zones is lost. Specify the resource name of a zone that belongs to the
     * region of the private cloud. For example:
     * `projects/{project}/locations/europe-west3-a` where `{project}` can either
     * be a project number or a project ID.
     *
     * Generated from protobuf field <code>string preferred_location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPreferredLocation()
    {
        return $this->preferred_location;
    }

    /**
     * Required. Zone that will remain operational when connection between the two
     * zones is lost. Specify the resource name of a zone that belongs to the
     * region of the private cloud. For example:
     * `projects/{project}/locations/europe-west3-a` where `{project}` can either
     * be a project number or a project ID.
     *
     * Generated from protobuf field <code>string preferred_location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPreferredLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->preferred_location = $var;

        return $this;
    }

    /**
     * Required. Additional zone for a higher level of availability and load
     * balancing. Specify the resource name of a zone that belongs to the region
     * of the private cloud. For example:
     * `projects/{project}/locations/europe-west3-b` where `{project}` can either
     * be a project number or a project ID.
     *
     * Generated from protobuf field <code>string secondary_location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSecondaryLocation()
    {
        return $this->secondary_location;
    }

    /**
     * Required. Additional zone for a higher level of availability and load
     * balancing. Specify the resource name of a zone that belongs to the region
     * of the private cloud. For example:
     * `projects/{project}/locations/europe-west3-b` where `{project}` can either
     * be a project number or a project ID.
     *
     * Generated from protobuf field <code>string secondary_location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_location = $var;

        return $this;
    }

}

