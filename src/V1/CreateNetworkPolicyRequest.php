<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.CreateNetworkPolicy][google.cloud.vmwareengine.v1.VmwareEngine.CreateNetworkPolicy]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.CreateNetworkPolicyRequest</code>
 */
class CreateNetworkPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the location (region)
     * to create the new network policy in.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     *  `projects/my-project/locations/us-central1`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The user-provided identifier of the network policy to be created.
     * This identifier must be unique within parent
     * `projects/{my-project}/locations/{us-central1}/networkPolicies` and becomes
     * the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string network_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_policy_id = '';
    /**
     * Required. The network policy configuration to use in the request.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NetworkPolicy network_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_policy = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                                      $parent          Required. The resource name of the location (region)
     *                                                                     to create the new network policy in.
     *                                                                     Resource names are schemeless URIs that follow the conventions in
     *                                                                     https://cloud.google.com/apis/design/resource_names.
     *                                                                     For example:
     *                                                                     `projects/my-project/locations/us-central1`
     *                                                                     Please see {@see VmwareEngineClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\VmwareEngine\V1\NetworkPolicy $networkPolicy   Required. The network policy configuration to use in the request.
     * @param string                                      $networkPolicyId Required. The user-provided identifier of the network policy to be created.
     *                                                                     This identifier must be unique within parent
     *                                                                     `projects/{my-project}/locations/{us-central1}/networkPolicies` and becomes
     *                                                                     the final token in the name URI.
     *                                                                     The identifier must meet the following requirements:
     *
     *                                                                     * Only contains 1-63 alphanumeric characters and hyphens
     *                                                                     * Begins with an alphabetical character
     *                                                                     * Ends with a non-hyphen character
     *                                                                     * Not formatted as a UUID
     *                                                                     * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *                                                                     (section 3.5)
     *
     * @return \Google\Cloud\VmwareEngine\V1\CreateNetworkPolicyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\VmwareEngine\V1\NetworkPolicy $networkPolicy, string $networkPolicyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setNetworkPolicy($networkPolicy)
            ->setNetworkPolicyId($networkPolicyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the location (region)
     *           to create the new network policy in.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *            `projects/my-project/locations/us-central1`
     *     @type string $network_policy_id
     *           Required. The user-provided identifier of the network policy to be created.
     *           This identifier must be unique within parent
     *           `projects/{my-project}/locations/{us-central1}/networkPolicies` and becomes
     *           the final token in the name URI.
     *           The identifier must meet the following requirements:
     *           * Only contains 1-63 alphanumeric characters and hyphens
     *           * Begins with an alphabetical character
     *           * Ends with a non-hyphen character
     *           * Not formatted as a UUID
     *           * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *           (section 3.5)
     *     @type \Google\Cloud\VmwareEngine\V1\NetworkPolicy $network_policy
     *           Required. The network policy configuration to use in the request.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server guarantees that a
     *           request doesn't result in creation of duplicate commitments for at least 60
     *           minutes.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the location (region)
     * to create the new network policy in.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     *  `projects/my-project/locations/us-central1`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the location (region)
     * to create the new network policy in.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     *  `projects/my-project/locations/us-central1`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The user-provided identifier of the network policy to be created.
     * This identifier must be unique within parent
     * `projects/{my-project}/locations/{us-central1}/networkPolicies` and becomes
     * the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string network_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkPolicyId()
    {
        return $this->network_policy_id;
    }

    /**
     * Required. The user-provided identifier of the network policy to be created.
     * This identifier must be unique within parent
     * `projects/{my-project}/locations/{us-central1}/networkPolicies` and becomes
     * the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string network_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_policy_id = $var;

        return $this;
    }

    /**
     * Required. The network policy configuration to use in the request.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NetworkPolicy network_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\NetworkPolicy|null
     */
    public function getNetworkPolicy()
    {
        return $this->network_policy;
    }

    public function hasNetworkPolicy()
    {
        return isset($this->network_policy);
    }

    public function clearNetworkPolicy()
    {
        unset($this->network_policy);
    }

    /**
     * Required. The network policy configuration to use in the request.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NetworkPolicy network_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\NetworkPolicy $var
     * @return $this
     */
    public function setNetworkPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\NetworkPolicy::class);
        $this->network_policy = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

