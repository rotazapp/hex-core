<?php
namespace Rotaz\Hex\Adapter\Outbound\Http\API;

use Rotaz\Hex\Adapter\Outbound\AdapterInterface;

/**
 * Interface defining methods for interacting with an HTTP-based API.
 */
interface ApiAdapterInterface extends AdapterInterface
{

    /**
     * Makes a GET request to the specified endpoint with optional data and headers.
     *
     * @param string $endpoint The API endpoint to send the GET request to.
     * @param array|null $data Optional data to be sent as query parameters.
     * @param array|null $header Optional headers to include in the request.
     * @return array|null The response data as an associative array, or null if the request fails.
     * @throws ApiAdapterInterfaceException
     */
    public function get( string $endpoint,  ?array $data = [] , ?array $header = []): ? array;

    /**
     * Makes a POST request to the specified endpoint with optional data and headers.
     *
     * @param string $endpoint The API endpoint to send the POST request to.
     * @param array|null $data Optional data to be sent in the request body.
     * @param array|null $headers Optional headers to include in the request.
     * @return array|null The response data as an associative array, or null if the request fails.
     * @throws ApiAdapterInterfaceException
     */
    public function post( string $endpoint , ?array $data = [] , ?array $headers = []): ? array;

    /**
     * Makes a PATCH request to the specified endpoint with optional data and headers.
     *
     * @param string $endpoint The API endpoint to send the PATCH request to.
     * @param array|null $data Optional data to include in the request body.
     * @param array|null $headers Optional headers to include in the request.
     * @return array|null The response data as an associative array, or null if the request fails.
     * @throws ApiAdapterInterfaceException
     */
    public function patch( string $endpoint , ?array $data = [] , ?array $headers = []): ? array;


    /**
     * Sends a DELETE request to the specified endpoint with optional data and headers.
     *
     * @param string $endpoint The API endpoint to send the DELETE request to.
     * @param array|null $data Optional data to include in the request body.
     * @param array|null $headers Optional headers to include in the request.
     * @return array|null The response data as an associative array, or null if the request fails.
     * @throws ApiAdapterInterfaceException
     */
    public function delete( string $endpoint , ?array $data = [] , ?array $headers = []): ? array;


}