<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cloud.proto

namespace GPBMetadata;

class Cloud
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
�
cloud.protobrizyMessage.cloud"d
CreateUserMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType
user_id (	"d
DeleteUserMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType
user_id (	"j
CreateProjectMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType

project_id (	"j
DeleteProjectMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType

project_id (	"�
CloneProjectMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType
source_project_iri (	
target_project_iri (	
brziy_api_access_token (	"�
CloneCollectionItemMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType
source_project_iri (	
target_project_iri (	
source_item_iri (	
target_item_iri (	"�
CloneCustomerMessage>
descriminator (2\'.brizyMessage.Message.DescriminatorType
source_project_iri (	
target_project_iri (	
source_customer_iri (	
target_customer_iri (	bproto3'
        , true);

        static::$is_initialized = true;
    }
}

