<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: doctrine.proto

namespace GPBMetadata;

class Doctrine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Message::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
doctrine.protobrizyMessage.doctrine"�
DoctrineMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorTypeG
event (28.brizyMessage.doctrine.DoctrineMessage.DoctrineEventType
	entity_id (
entity_snapshot (	"�
DoctrineEventType

PRE_REMOVE 
POST_REMOVE
PRE_PERSIST
POST_PERSIST

PRE_UPDATE
POST_UPDATE
	POST_LOAD
	PRE_FLUSH
ON_FLUSH

POST_FLUSH	
ON_CLEAR
"N
DummyMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorTypebproto3'
        , true);

        static::$is_initialized = true;
    }
}

