<?php

namespace Rotaz\Hex\Port\Inbound;

interface MessagePortInterface
{
    /**
     * Recebe uma mensagem de entrada, valida autorização e payload, e envia para fila de integração.
     *
     * @param array $payload Dados recebidos
     * @param array $headers Cabeçalhos/metadados
     *
     * @throws InboundPortException
     */
    public function onMessage(array $payload, array $headers = []): void;
}