<?php

namespace Rotaz\Hex\Helpers;

class Parser
{
    /**
     * Parseia dados para o formato desejado.
     */
    public static function parseJson(string $json): array
    {
        return json_decode($json, true) ?: [];
    }

    /**
     * Converte array em JSON.
     */
    public static function toJson(array $data): string
    {
        return json_encode($data);
    }
}