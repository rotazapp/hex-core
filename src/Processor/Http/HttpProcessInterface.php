<?php

namespace Rotaz\Hex\Processor\Http;

use Rotaz\Hex\Processor\ProcessInterface;

interface HttpProcessInterface extends ProcessInterface
{
    /**
     * Processamento específico para mensagens HTTP.
     */
    public function processHttp(array $message): void;
}