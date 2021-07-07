<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: doctrine.proto

namespace BrizyMessage\Doctrine\DoctrineMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>brizyMessage.doctrine.DoctrineMessage.DoctrineEventType</code>
 */
class DoctrineEventType
{
    /**
     * Generated from protobuf enum <code>PRE_REMOVE = 0;</code>
     */
    const PRE_REMOVE = 0;
    /**
     * Generated from protobuf enum <code>POST_REMOVE = 1;</code>
     */
    const POST_REMOVE = 1;
    /**
     * Generated from protobuf enum <code>PRE_PERSIST = 2;</code>
     */
    const PRE_PERSIST = 2;
    /**
     * Generated from protobuf enum <code>POST_PERSIST = 3;</code>
     */
    const POST_PERSIST = 3;
    /**
     * Generated from protobuf enum <code>PRE_UPDATE = 4;</code>
     */
    const PRE_UPDATE = 4;
    /**
     * Generated from protobuf enum <code>POST_UPDATE = 5;</code>
     */
    const POST_UPDATE = 5;
    /**
     * Generated from protobuf enum <code>POST_LOAD = 6;</code>
     */
    const POST_LOAD = 6;
    /**
     * Generated from protobuf enum <code>PRE_FLUSH = 7;</code>
     */
    const PRE_FLUSH = 7;
    /**
     * Generated from protobuf enum <code>ON_FLUSH = 8;</code>
     */
    const ON_FLUSH = 8;
    /**
     * Generated from protobuf enum <code>POST_FLUSH = 9;</code>
     */
    const POST_FLUSH = 9;
    /**
     * Generated from protobuf enum <code>ON_CLEAR = 10;</code>
     */
    const ON_CLEAR = 10;

    private static $valueToName = [
        self::PRE_REMOVE => 'PRE_REMOVE',
        self::POST_REMOVE => 'POST_REMOVE',
        self::PRE_PERSIST => 'PRE_PERSIST',
        self::POST_PERSIST => 'POST_PERSIST',
        self::PRE_UPDATE => 'PRE_UPDATE',
        self::POST_UPDATE => 'POST_UPDATE',
        self::POST_LOAD => 'POST_LOAD',
        self::PRE_FLUSH => 'PRE_FLUSH',
        self::ON_FLUSH => 'ON_FLUSH',
        self::POST_FLUSH => 'POST_FLUSH',
        self::ON_CLEAR => 'ON_CLEAR',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DoctrineEventType::class, \BrizyMessage\Doctrine\DoctrineMessage_DoctrineEventType::class);

