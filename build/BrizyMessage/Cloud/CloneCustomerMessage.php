<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cloud.proto

namespace BrizyMessage\Cloud;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>brizyMessage.cloud.CloneCustomerMessage</code>
 */
class CloneCustomerMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.brizyMessage.Message.DescriminatorType descriminator = 1;</code>
     */
    protected $descriminator = 0;
    /**
     * Generated from protobuf field <code>string source_customer_iri = 2;</code>
     */
    protected $source_customer_iri = '';
    /**
     * Generated from protobuf field <code>string target_customer_iri = 3;</code>
     */
    protected $target_customer_iri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $descriminator
     *     @type string $source_customer_iri
     *     @type string $target_customer_iri
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

    /**
     * Generated from protobuf field <code>string source_customer_iri = 2;</code>
     * @return string
     */
    public function getSourceCustomerIri()
    {
        return $this->source_customer_iri;
    }

    /**
     * Generated from protobuf field <code>string source_customer_iri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceCustomerIri($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_customer_iri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string target_customer_iri = 3;</code>
     * @return string
     */
    public function getTargetCustomerIri()
    {
        return $this->target_customer_iri;
    }

    /**
     * Generated from protobuf field <code>string target_customer_iri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetCustomerIri($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_customer_iri = $var;

        return $this;
    }

}

