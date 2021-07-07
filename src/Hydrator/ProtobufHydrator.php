<?php

declare(strict_types=1);

namespace BrizyMessage\Hydrator;

use Brizy\Doctrine\DoctrineMessage;
use BrizyMessage\Hydrator\Exception\ConvertToMessageFailedException;
use BrizyMessage\Hydrator\Exception\VersionNotSupportedException;
use BrizyMessage\Transformer\ProtobufTransformer;
use Brizy\Message;
use Message\Message\DescriminatorType;


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
            case DescriminatorType::DOCTRINE_MESSAGE:
                return $this->getInstanceOf(DoctrineMessage::class, $payload);
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
