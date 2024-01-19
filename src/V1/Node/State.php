<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\Node;

use UnexpectedValueException;

/**
 * Enum State defines possible states of a node in a cluster.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.Node.State</code>
 */
class State
{
    /**
     * The default value. This value should never be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Node is operational and can be used by the user.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Node is being provisioned.
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;
    /**
     * Node is in a failed state.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * Node is undergoing maintenance, e.g.: during private cloud upgrade.
     *
     * Generated from protobuf enum <code>UPGRADING = 4;</code>
     */
    const UPGRADING = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::CREATING => 'CREATING',
        self::FAILED => 'FAILED',
        self::UPGRADING => 'UPGRADING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


