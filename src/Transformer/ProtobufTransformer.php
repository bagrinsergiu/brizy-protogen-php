<?php

declare(strict_types=1);

namespace BrizySerializer\Transformer;

use BrizySerializer\Transformer\Exception\ConvertToArrayFailedException;
use BrizySerializer\Transformer\Exception\TransformerNotFoundException;
use Symfony\Component\Messenger\Envelope;
use Google\Protobuf\Internal\Message;

final class ProtobufTransformer implements TransformerInterface
{
    public const VERSION = 1;

    /**
     * The version of the message.
     */
    public function getVersion(): int {
        return 1;
    }

    /**
     * Convert a message to an array.
     *
     * @param Envelope  $message
     */
    public function getPayload(Envelope $message): array {
        /**
         * @var Message $message;
         */
        $message = $message->getMessage();

        return $message->serializeToString();
    }

    /**
     * Does this transformer support this kind of message?
     *
     * @param object $message
     */
    public function supportsTransform($message): bool {
        return $message instanceof Message;
    }
}
