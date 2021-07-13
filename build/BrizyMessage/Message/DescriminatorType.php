<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace BrizyMessage\Message;

use UnexpectedValueException;

/**
 * Protobuf type <code>brizyMessage.Message.DescriminatorType</code>
 */
class DescriminatorType
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>DOCTRINE_MESSAGE = 1;</code>
     */
    const DOCTRINE_MESSAGE = 1;
    /**
     * Generated from protobuf enum <code>TRANSLATE_ENTITY_MESSAGE = 2;</code>
     */
    const TRANSLATE_ENTITY_MESSAGE = 2;
    /**
     * Generated from protobuf enum <code>REMOVE_ENTITY_TRANSLATION_MESSAGE = 3;</code>
     */
    const REMOVE_ENTITY_TRANSLATION_MESSAGE = 3;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::DOCTRINE_MESSAGE => 'DOCTRINE_MESSAGE',
        self::TRANSLATE_ENTITY_MESSAGE => 'TRANSLATE_ENTITY_MESSAGE',
        self::REMOVE_ENTITY_TRANSLATION_MESSAGE => 'REMOVE_ENTITY_TRANSLATION_MESSAGE',
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
class_alias(DescriminatorType::class, \BrizyMessage\Message_DescriminatorType::class);
