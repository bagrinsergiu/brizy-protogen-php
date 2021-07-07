<?php

declare(strict_types=1);

namespace BrizyMessage\Transformer;

use BrizyMessage\Transformer\Exception\TransformerException;
use Symfony\Component\Messenger\Envelope;

interface MessageToArrayInterface
{
    /**
     * Convert an object to an array.
     *
     * @param object $message
     *
     * @throws TransformerException
     */
    public function toArray(Envelope $message): array;
}
