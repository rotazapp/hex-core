<?php

namespace Rotaz\Hex\Port\Inbound\GRPC;

use Rotaz\Hex\Port\Inbound\MessagePortInterface;

interface GrpcMessagePortInterface extends MessagePortInterface
{
    /**
     * Entrada para mensagens GRPC.
     */
    public function onGrpcMessage(array $payload, array $headers = []): void;
}