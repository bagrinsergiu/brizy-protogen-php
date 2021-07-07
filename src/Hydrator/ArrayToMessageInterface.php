<?php

declare(strict_types=1);

namespace BrizySerializer\Hydrator;

use BrizySerializer\Hydrator\Exception\HydratorException;

interface ArrayToMessageInterface
{
    /**
     * @return object
     *
     * @throws HydratorException
     */
    public function toMessage(array $data);
}
