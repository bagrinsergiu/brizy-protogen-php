<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: brizy.proto

namespace BrizyMessage\Brizy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>brizyMessage.brizy.UpdateCollectionItemMessage</code>
 */
class UpdateCollectionItemMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.brizyMessage.Message.DescriminatorType descriminator = 1;</code>
     */
    protected $descriminator = 0;
    /**
     * Generated from protobuf field <code>string project_iri = 2;</code>
     */
    protected $project_iri = '';
    /**
     * Generated from protobuf field <code>string entity_iri = 3;</code>
     */
    protected $entity_iri = '';
    /**
     * Generated from protobuf field <code>string brziy_api_access_token = 4;</code>
     */
    protected $brziy_api_access_token = '';
    /**
     * Generated from protobuf field <code>string user_id = 5;</code>
     */
    protected $user_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $descriminator
     *     @type string $project_iri
     *     @type string $entity_iri
     *     @type string $brziy_api_access_token
     *     @type string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Brizy::initOnce();
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
     * Generated from protobuf field <code>string project_iri = 2;</code>
     * @return string
     */
    public function getProjectIri()
    {
        return $this->project_iri;
    }

    /**
     * Generated from protobuf field <code>string project_iri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectIri($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_iri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entity_iri = 3;</code>
     * @return string
     */
    public function getEntityIri()
    {
        return $this->entity_iri;
    }

    /**
     * Generated from protobuf field <code>string entity_iri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityIri($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_iri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string brziy_api_access_token = 4;</code>
     * @return string
     */
    public function getBrziyApiAccessToken()
    {
        return $this->brziy_api_access_token;
    }

    /**
     * Generated from protobuf field <code>string brziy_api_access_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBrziyApiAccessToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->brziy_api_access_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 5;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

}

