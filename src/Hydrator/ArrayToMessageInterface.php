<?php

declare(strict_types=1);

namespace BrizyMessage\Hydrator;

use BrizyMessage\Hydrator\Exception\HydratorException;

interface ArrayToMessageInterface
{
    /**
     * @return object
     *
     * @throws HydratorException
     */
    public function toMessage(array $data);
}
