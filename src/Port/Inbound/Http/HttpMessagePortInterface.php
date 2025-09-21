<?php

namespace Rotaz\Hex\Port\Inbound\Http;

use Rotaz\Hex\Port\Inbound\MessagePortInterface;

interface HttpMessagePortInterface extends MessagePortInterface
{

    /**
     * Handles an incoming HTTP message with the provided payload and headers.
     *
     * @param array $payload The content or data of the HTTP message.
     * @param array $headers Optional. An associative array of HTTP headers associated with the message.
     * @return void
     * @throws InboundHttpPortException
     */
    public function onHttpMessage(array $payload, array $headers = []): void;
}