<?php

declare(strict_types=1);

namespace BrizyMessage\Transformer\Exception;

/**
 * This is thrown if a transformer had an issue transforming a message.
 */
final class ConvertToArrayFailedException extends \RuntimeException implements TransformerException
{
}
