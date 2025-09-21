<?php

namespace Rotaz\Hex\Event;

/**
 * @author Rodrigo Souza acptecnologia@gmail.com
 *
 * An abstract class that defines the structure for an event, implementing the EventInterface.
 * Provides mechanisms to handle event names, payload data, headers, and UUID extraction.
 */
abstract class AbstractEvent implements EventInterface
{
    const EVENT_X_TRID = 'x-trid';
    protected string $name;
    protected array|string|null $payload;
    protected array|string|null $headers;

    /**
     *
     * @param string|null $name
     * @param array|string|null $payload
     * @param array|null $headers
     */
    public function __construct(?string $name , array|string|null $payload, ?array $headers = [])
    {
        $this->name = is_null( $name ) ? self::class : $name;
        $this->payload = $payload;
        $this->headers = $headers;
    }

    /**
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Retrieves the payload.
     *
     * @return array|string|null Returns the payload, which can be an array, a string, or null.
     */
    public function payload():  array|string|null
    {
        return $this->payload;
    }

    /**
     * Retrieves the headers.
     *
     * @return array|string|null Returns the headers, which can be an array, a string, or null.
     */

    public function headers(): array|string|null
    {
        return $this->headers;
    }

    /**
     * Retrieves the UUID from the headers if it exists.
     *
     * @return string|null The UUID if present in the headers; otherwise, an empty string.
     */

    public function getUUid():? string
    {
        return array_key_exists( self::EVENT_X_TRID , $this->headers() )? $this->headers[self::EVENT_X_TRID] : '';
    }
}