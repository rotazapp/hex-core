<?php

namespace Rotaz\Hex\Port\Inbound\Error;

interface ErrorPortInterface
{
    /**
     * Manipula erros de entrada.
     */
    public function onError(\Throwable $exception, array $context = []): void;
}