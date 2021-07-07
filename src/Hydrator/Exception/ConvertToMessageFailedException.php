<?php

declare(strict_types=1);

namespace BrizyMessage\Hydrator\Exception;

/**
 * This is thrown if a Hydator had an issue hydrating a message.
 */
final class ConvertToMessageFailedException extends \RuntimeException implements HydratorException
{
}
