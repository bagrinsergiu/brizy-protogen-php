<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cloud.proto

namespace BrizyMessage\Cloud;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>brizyMessage.cloud.ClearPlatformCacheMessage</code>
 */
class ClearPlatformCacheMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.brizyMessage.Message.DescriminatorType descriminator = 1;</code>
     */
    protected $descriminator = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $descriminator
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cloud::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.brizyMessage.Message.DescriminatorType descriminator = 1;</code>
     * @return int
     */
    public function getDescriminator()
    {
        return $this->descriminator;
    }

    /**
     * Generated from protobuf field <code>.brizyMessage.Message.DescriminatorType descriminator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDescriminator($var)
    {
        GPBUtil::checkEnum($var, \BrizyMessage\Message\DescriminatorType::class);
        $this->descriminator = $var;

        return $this;
    }

}

