<?php

declare(strict_types=1);

namespace Psr\Http\Message;

/**
 * Server request factory interface.
 */
interface ServerRequestFactoryInterface
{
    /**
     * Create a new server request.
     *
     * Note that server parameters are taken precisely as given - no parsing/processing
     * of the given values is performed. In particular, no attempt is made to
     * determine the HTTP method or URI, which must be provided explicitly.
     *
     * @param string              $method       the HTTP method associated
     *                                          with the request
     * @param string|UriInterface $uri          the URI associated with the request
     * @param array               $serverParams an array of Server API (SAPI)
     *                                          parameters with which to seed
     *                                          the generated request instance
     *
     * @return ServerRequestInterface new server request
     */
    public function createServerRequest(
        string $method,
        UriInterface|string $uri,
        array $serverParams = [],
    ): ServerRequestInterface;
}
