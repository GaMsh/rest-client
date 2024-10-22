<?php

namespace RestClient\Serialization;

use RestClient\Exception\UnknownTypeException;

interface SerializerInterface
{
    public function serialize(object $object): string;

    /**
     * @throws UnknownTypeException
     */
    public function deserialize(string $data, string $targetType, bool $asList): object|array;
}
