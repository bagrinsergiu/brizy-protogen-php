<?php

declare(strict_types=1);

namespace BrizySerializer\Hydrator;

use BrizyMessage\Cloud\CloneCollectionItemMessage;
use BrizyMessage\Cloud\CloneCustomerMessage;
use BrizyMessage\Cloud\CloneProjectMessage;
use BrizyMessage\Cloud\CreateProjectMessage;
use BrizyMessage\Cloud\CreateUserMessage;
use BrizyMessage\Cloud\DeleteProjectMessage;
use BrizyMessage\Cloud\DeleteUserMessage;
use BrizyMessage\Doctrine\DoctrineEventMessage;
use BrizyMessage\Message;
use BrizyMessage\Notification\NotificationMessage;
use BrizySerializer\Hydrator\Exception\ConvertToMessageFailedException;
use BrizySerializer\Hydrator\Exception\VersionNotSupportedException;
use BrizySerializer\Transformer\ProtobufTransformer;
use BrizyMessage\Translation\TranslateEntityMessage;
use BrizyMessage\Translation\RemoveEntityTranslationMessage;

final class ProtobufHydrator implements HydratorInterface
{
    /**
     * Convert an array to a message.
     *
     * @return object
     */
    public function toMessage(string $payload, int $version)
    {
        $message = $this->getInstanceOf(Message::class, $payload);
        $message->mergeFromString($payload);

        switch ($message->getDescriminator()) {
            case Message\DescriminatorType::DOCTRINE_MESSAGE:
                return $this->getInstanceOf(DoctrineEventMessage::class, $payload);
            case Message\DescriminatorType::TRANSLATE_ENTITY_MESSAGE:
                return $this->getInstanceOf(TranslateEntityMessage::class, $payload);
            case Message\DescriminatorType::REMOVE_ENTITY_TRANSLATION_MESSAGE:
                return $this->getInstanceOf(RemoveEntityTranslationMessage::class, $payload);
            case Message\DescriminatorType::NOTIFICATION_MESSAGE:
                return $this->getInstanceOf(NotificationMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_CREATE_PROJECT_MESSAGE:
                return $this->getInstanceOf(CreateProjectMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_DELETE_PROJECT_MESSAGE:
                return $this->getInstanceOf(DeleteProjectMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_CREATE_USER_MESSAGE:
                return $this->getInstanceOf(CreateUserMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_DELETE_USER_MESSAGE:
                return $this->getInstanceOf(DeleteUserMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_CLONE_PROJECT_MESSAGE:
                return $this->getInstanceOf(CloneProjectMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_CLONE_COLLECTION_ITEM_MESSAGE:
                return $this->getInstanceOf(CloneCollectionItemMessage::class, $payload);
            case Message\DescriminatorType::CLOUD_CLONE_CUSTOEMR_MESSAGE:
                return $this->getInstanceOf(CloneCustomerMessage::class, $payload);
            default:
                throw new ConvertToMessageFailedException("Unknown descriminator value");
        }
    }

    /**
     * Does this Hydrator support this identifier and version?
     *
     * @throws VersionNotSupportedException
     */
    public function supportsHydrate(int $version): bool
    {
        return $version === ProtobufTransformer::VERSION;
    }

    private function getInstanceOf($class, $payload)
    {
        $message = new $class();
        $message->mergeFromString($payload);

        return $message;
    }
}
