<?php

declare(strict_types=1);

namespace BrizyMessage\Hydrator;

use BrizyMessage\Hydrator\Exception\ConvertToMessageFailedException;
use BrizyMessage\Hydrator\Exception\HydratorNotFoundException;
use BrizyMessage\Hydrator\Exception\VersionNotSupportedException;

final class Hydrator implements ArrayToMessageInterface
{
    /**
     * @var HydratorInterface[]
     */
    private $hydrators;

    public function __construct(iterable $hydrators)
    {
        $this->hydrators = $hydrators;
    }

    /**
     * @throws ConvertToMessageFailedException
     * @throws VersionNotSupportedException
     * @throws HydratorNotFoundException
     */
    public function toMessage(array $data)
    {
        // Default exception to be thrown.
        $exception = new HydratorNotFoundException();

        foreach ($this->hydrators as $hydrator) {
            try {
                $isSupported = $hydrator->supportsHydrate($data['identifier'] ?? '', $data['version'] ?? 0);
            } catch (VersionNotSupportedException $e) {
                $exception = $e;
                continue;
            }

            if (!$isSupported) {
                continue;
            }

            try {
                return $hydrator->toMessage($data['payload'] ?? [], $data['version'] ?? 0);
            } catch (\Throwable $throwable) {
                throw new ConvertToMessageFailedException(sprintf('Transformer "%s" failed to transform a message.', get_class($hydrator)), 0, $throwable);
            }
        }

        throw $exception;
    }
}
