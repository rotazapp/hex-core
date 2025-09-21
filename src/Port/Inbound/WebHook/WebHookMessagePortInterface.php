<?php

namespace Rotaz\Hex\Port\Inbound\WebHook;

use Rotaz\Hex\Port\Inbound\MessagePortInterface;

/**
 * Interface for handling WebHook message ports.
 */
interface WebHookMessagePortInterface extends MessagePortInterface
{
    /**
     * Entrada para WebHooks HTTP.
     */
    public function onWebHookMessage(array $payload, array $headers = []): void;
}