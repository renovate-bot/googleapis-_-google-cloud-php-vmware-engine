<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.UpdatePrivateConnection][google.cloud.vmwareengine.v1.VmwareEngine.UpdatePrivateConnection]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.UpdatePrivateConnectionRequest</code>
 */
class UpdatePrivateConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Private connection description.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateConnection private_connection = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $private_connection = null;
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `PrivateConnection` resource by the update.
     * The fields specified in the `update_mask` are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
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
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param \Google\Cloud\VmwareEngine\V1\PrivateConnection $privateConnection Required. Private connection description.
     * @param \Google\Protobuf\FieldMask                      $updateMask        Required. Field mask is used to specify the fields to be overwritten in the
     *                                                                           `PrivateConnection` resource by the update.
     *                                                                           The fields specified in the `update_mask` are relative to the resource, not
     *                                                                           the full request. A field will be overwritten if it is in the mask. If the
     *                                                                           user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\VmwareEngine\V1\UpdatePrivateConnectionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\VmwareEngine\V1\PrivateConnection $privateConnection, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setPrivateConnection($privateConnection)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VmwareEngine\V1\PrivateConnection $private_connection
     *           Required. Private connection description.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           `PrivateConnection` resource by the update.
     *           The fields specified in the `update_mask` are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
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
     * Required. Private connection description.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateConnection private_connection = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\PrivateConnection|null
     */
    public function getPrivateConnection()
    {
        return $this->private_connection;
    }

    public function hasPrivateConnection()
    {
        return isset($this->private_connection);
    }

    public function clearPrivateConnection()
    {
        unset($this->private_connection);
    }

    /**
     * Required. Private connection description.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.PrivateConnection private_connection = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\PrivateConnection $var
     * @return $this
     */
    public function setPrivateConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\PrivateConnection::class);
        $this->private_connection = $var;

        return $this;
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `PrivateConnection` resource by the update.
     * The fields specified in the `update_mask` are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `PrivateConnection` resource by the update.
     * The fields specified in the `update_mask` are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

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
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

