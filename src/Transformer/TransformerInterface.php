<?php

declare(strict_types=1);

namespace BrizySerializer\Transformer;

use Symfony\Component\Messenger\Envelope;

interface TransformerInterface
{
    /**
     * The version of the message.
     */
    public function getVersion(): int;

    /**
     * Convert a message to an array.
     *
     * @param object $message
     */
    public function getPayload(Envelope $message): array;

    /**
     * Does this transformer support this kind of message?
     *
     * @param object $message
     */
    public function supportsTransform($message): bool;
}
