<?php

declare(strict_types=1);

namespace BrizySerializer\Transformer\Exception;

/**
 * This is thrown if a transformer had an issue transforming a message.
 */
final class ConvertToArrayFailedException extends \RuntimeException implements TransformerException
{
}
