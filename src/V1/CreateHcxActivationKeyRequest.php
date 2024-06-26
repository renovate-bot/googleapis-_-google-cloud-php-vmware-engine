<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.CreateHcxActivationKey][google.cloud.vmwareengine.v1.VmwareEngine.CreateHcxActivationKey]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.CreateHcxActivationKeyRequest</code>
 */
class CreateHcxActivationKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the private cloud to create the key for.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The initial description of a new HCX activation key. When
     * creating a new key, this field must be an empty object.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.HcxActivationKey hcx_activation_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hcx_activation_key = null;
    /**
     * Required. The user-provided identifier of the `HcxActivationKey` to be
     * created. This identifier must be unique among `HcxActivationKey` resources
     * within the parent and becomes the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string hcx_activation_key_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hcx_activation_key_id = '';
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';

    /**
     * @param string                                         $parent             Required. The resource name of the private cloud to create the key for.
     *                                                                           Resource names are schemeless URIs that follow the conventions in
     *                                                                           https://cloud.google.com/apis/design/resource_names.
     *                                                                           For example:
     *                                                                           `projects/my-project/locations/us-central1/privateClouds/my-cloud`
     *                                                                           Please see {@see VmwareEngineClient::privateCloudName()} for help formatting this field.
     * @param \Google\Cloud\VmwareEngine\V1\HcxActivationKey $hcxActivationKey   Required. The initial description of a new HCX activation key. When
     *                                                                           creating a new key, this field must be an empty object.
     * @param string                                         $hcxActivationKeyId Required. The user-provided identifier of the `HcxActivationKey` to be
     *                                                                           created. This identifier must be unique among `HcxActivationKey` resources
     *                                                                           within the parent and becomes the final token in the name URI.
     *                                                                           The identifier must meet the following requirements:
     *
     *                                                                           * Only contains 1-63 alphanumeric characters and hyphens
     *                                                                           * Begins with an alphabetical character
     *                                                                           * Ends with a non-hyphen character
     *                                                                           * Not formatted as a UUID
     *                                                                           * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *                                                                           (section 3.5)
     *
     * @return \Google\Cloud\VmwareEngine\V1\CreateHcxActivationKeyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\VmwareEngine\V1\HcxActivationKey $hcxActivationKey, string $hcxActivationKeyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setHcxActivationKey($hcxActivationKey)
            ->setHcxActivationKeyId($hcxActivationKeyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the private cloud to create the key for.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1/privateClouds/my-cloud`
     *     @type \Google\Cloud\VmwareEngine\V1\HcxActivationKey $hcx_activation_key
     *           Required. The initial description of a new HCX activation key. When
     *           creating a new key, this field must be an empty object.
     *     @type string $hcx_activation_key_id
     *           Required. The user-provided identifier of the `HcxActivationKey` to be
     *           created. This identifier must be unique among `HcxActivationKey` resources
     *           within the parent and becomes the final token in the name URI.
     *           The identifier must meet the following requirements:
     *           * Only contains 1-63 alphanumeric characters and hyphens
     *           * Begins with an alphabetical character
     *           * Ends with a non-hyphen character
     *           * Not formatted as a UUID
     *           * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *           (section 3.5)
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server guarantees that a
     *           request doesn't result in creation of duplicate commitments for at least 60
     *           minutes.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the private cloud to create the key for.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the private cloud to create the key for.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1/privateClouds/my-cloud`
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
     * Required. The initial description of a new HCX activation key. When
     * creating a new key, this field must be an empty object.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.HcxActivationKey hcx_activation_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\HcxActivationKey|null
     */
    public function getHcxActivationKey()
    {
        return $this->hcx_activation_key;
    }

    public function hasHcxActivationKey()
    {
        return isset($this->hcx_activation_key);
    }

    public function clearHcxActivationKey()
    {
        unset($this->hcx_activation_key);
    }

    /**
     * Required. The initial description of a new HCX activation key. When
     * creating a new key, this field must be an empty object.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.HcxActivationKey hcx_activation_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\HcxActivationKey $var
     * @return $this
     */
    public function setHcxActivationKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\HcxActivationKey::class);
        $this->hcx_activation_key = $var;

        return $this;
    }

    /**
     * Required. The user-provided identifier of the `HcxActivationKey` to be
     * created. This identifier must be unique among `HcxActivationKey` resources
     * within the parent and becomes the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string hcx_activation_key_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHcxActivationKeyId()
    {
        return $this->hcx_activation_key_id;
    }

    /**
     * Required. The user-provided identifier of the `HcxActivationKey` to be
     * created. This identifier must be unique among `HcxActivationKey` resources
     * within the parent and becomes the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string hcx_activation_key_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHcxActivationKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->hcx_activation_key_id = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
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

