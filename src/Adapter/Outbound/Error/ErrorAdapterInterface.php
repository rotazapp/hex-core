<?php

namespace Rotaz\Hex\Adapter\Outbound\Error;

interface ErrorAdapterInterface
{
    /**
     * Notifica ou manipula erros no destino.
     */
    public function notifyError(\Throwable $exception, array $context = []): void;
}