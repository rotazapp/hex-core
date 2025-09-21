<?php

namespace Rotaz\Hex\Adapter\Outbound;

/**
 * Defines the contract for adapter interfaces responsible for sending processed messages
 * to an external destination such as an API or database.
 */
interface AdapterInterface
{
    /**
     * Envia a mensagem processada para o destino externo (API, banco, etc).
     *
     * @param array $data Dados a enviar
     * @throws OutboundAdapterException
     */
    public function send(array $data): void;
}