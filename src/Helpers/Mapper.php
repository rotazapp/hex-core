<?php

namespace Rotaz\Hex\Helpers;

class Mapper
{
    /**
     * Mapeia dados de um array para outro formato.
     */
    public static function map(array $data, array $map): array
    {
        $mapped = [];
        foreach ($map as $key => $value) {
            $mapped[$key] = isset($data[$value]) ? $data[$value] : null;
        }
        return $mapped;
    }
}