<?php

declare(strict_types=1);

namespace BrizySerializer\Hydrator;

use BrizySerializer\Hydrator\Exception\ConvertToMessageFailedException;
use BrizySerializer\Hydrator\Exception\HydratorNotFoundException;
use BrizySerializer\Hydrator\Exception\VersionNotSupportedException;

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
                $isSupported = $hydrator->supportsHydrate( $data['version'] ?? 0);
            } catch (VersionNotSupportedException $e) {
                $exception = $e;
                continue;
            }

            if (!$isSupported) {
                continue;
            }

            try {
                return $hydrator->toMessage(base64_decode($data['payload']) ?? [], $data['version'] ?? 0);
            } catch (\Throwable $throwable) {
                throw new ConvertToMessageFailedException(sprintf('Transformer "%s" failed to transform a message.', get_class($hydrator)), 0, $throwable);
            }
        }

        throw $exception;
    }
}
