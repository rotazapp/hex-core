<?php

namespace Rotaz\Hex\Event;

/**
 * Interface representing an event structure with a standardized name, payload, and metadata.
 */
interface EventInterface
{
    /**
     * Nome único e padronizado do evento.
     */
    public function name(): string;

    /**
     * Payload do evento.
     */
    public function payload(): array | string | null;

    /**
     * Metadados/cabeçalhos do evento.
     */
    public function headers(): array|string|null;
}