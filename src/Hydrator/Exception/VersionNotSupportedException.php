<?php

declare(strict_types=1);

namespace BrizySerializer\Hydrator\Exception;

/**
 * Throw this when the Hydrator do support the message type but not the version.
 */
final class VersionNotSupportedException extends \RuntimeException implements HydratorException
{
}
