<?php

declare(strict_types=1);

namespace BrizyMessage\Hydrator;

use BrizyMessage\Hydrator\Exception\VersionNotSupportedException;
use BrizyMessage\Transformer\ProtobufTransformer;

final class ProtobufHydrator implements HydratorInterface
{
    /**
     * Convert an array to a message.
     *
     * @return object
     */
    public function toMessage(array $payload, int $version) {

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
}
