<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: message.proto

namespace GPBMetadata;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
message.protobrizyMessage"�
Message>
descriminator (2\'.brizyMessage.Message.DescriminatorType"�
DescriminatorType
NONE 
DOCTRINE_MESSAGE
TRANSLATE_ENTITY_MESSAGE%
!REMOVE_ENTITY_TRANSLATION_MESSAGE
NOTIFICATION_MESSAGE
CLOUD_CREATE_USER_MESSAGE
CLOUD_DELETE_USER_MESSAGE 
CLOUD_CREATE_PROJECT_MESSAGE 
CLOUD_DELETE_PROJECT_MESSAGE
CLOUD_CLONE_PROJECT_MESSAGE	\'
#CLOUD_CLONE_COLLECTION_ITEM_MESSAGE
 
CLOUD_CLONE_CUSTOEMR_MESSAGE"
CREATE_COLLECTION_ITEM_MESSAGE"
UPDATE_COLLECTION_ITEM_MESSAGE"
DELETE_COLLECTION_ITEM_MESSAGE&
"CLOUD_CLEAR_PLATFORM_CACHE_MESSAGE"
CREATE_COLLECTION_TYPE_MESSAGE"
UPDATE_COLLECTION_TYPE_MESSAGE"
DELETE_COLLECTION_TYPE_MESSAGE
CREATE_CUSTOMER_MESSAGE
UPDATE_CUSTOMER_MESSAGE
DELETE_CUSTOMER_MESSAGEbproto3'
        , true);

        static::$is_initialized = true;
    }
}

