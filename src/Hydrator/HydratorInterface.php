<?php

declare(strict_types=1);

namespace BrizySerializer\Hydrator;

use BrizySerializer\Hydrator\Exception\VersionNotSupportedException;

interface HydratorInterface
{
    /**
     * Convert an array to a message.
     *
     * @return object
     */
    public function toMessage(string $payload, int $version);

    /**
     * Does this Hydrator support this identifier and version?
     *
     * @throws VersionNotSupportedException
     */
    public function supportsHydrate(int $version): bool;
}
