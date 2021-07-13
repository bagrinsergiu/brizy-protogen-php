<?php

declare(strict_types=1);

namespace BrizySerializer\Transformer;

use BrizySerializer\Transformer\Exception\ConvertToArrayFailedException;
use BrizySerializer\Transformer\Exception\TransformerNotFoundException;
use Symfony\Component\Messenger\Envelope;

final class Transformer implements MessageToArrayInterface
{
    /**
     * @var TransformerInterface[]
     */
    private $transformers;

    public function __construct(iterable $transformers)
    {
        $this->transformers = $transformers;
    }

    /**
     * @throws TransformerNotFoundException
     * @throws ConvertToArrayFailedException
     */
    public function toArray(Envelope $message): array
    {
        foreach ($this->transformers as $transformer) {
            if (!$transformer->supportsTransform($message->getMessage())) {
                continue;
            }

            try {
                return [
                    'version' => $transformer->getVersion(),
                    'timestamp' => time(),
                    'payload' => base64_encode($transformer->getPayload($message)),
                ];
            } catch (\Throwable $throwable) {
                throw new ConvertToArrayFailedException(sprintf('Transformer "%s" failed to transform a message.', get_class($transformer)), 0, $throwable);
            }
        }

        if ($message instanceof Envelope) {
            $type = sprintf('Envelope<%s>', get_class($message->getMessage()));
        } else {
            $type = is_object($message) ? get_class($message) : gettype($message);
        }

        throw new TransformerNotFoundException(sprintf('No transformer found for "%s"', $type));
    }
}
