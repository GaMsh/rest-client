<?php

namespace RestClient\Converter;

class JsonConverter implements ConverterInterface
{
    public function canConvert(string $targetType, string $dataType): bool
    {
        return str_contains($dataType, 'json');
    }

    /**
     * @throws \JsonException
     */
    public function convert(string $targetType, string $dataType, string $data)
    {
        return \json_decode($data, true, 512, JSON_THROW_ON_ERROR);
    }
}
