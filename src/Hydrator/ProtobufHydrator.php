<?php

declare(strict_types=1);

namespace BrizySerializer\Hydrator;

use BrizyMessage\Doctrine\DoctrineMessage;
use BrizyMessage\Message;
use BrizySerializer\Hydrator\Exception\ConvertToMessageFailedException;
use BrizySerializer\Hydrator\Exception\VersionNotSupportedException;
use BrizySerializer\Transformer\ProtobufTransformer;


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
