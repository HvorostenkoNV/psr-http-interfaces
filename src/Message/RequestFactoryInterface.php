<?php

declare(strict_types=1);

namespace Psr\Http\Message;

/**
 * Request factory interface.
 */
interface RequestFactoryInterface
{
    /**
     * Create a new request.
     *
     * @param string              $method the HTTP method associated with the request
     * @param string|UriInterface $uri    the URI associated with the request
     *
     * @return RequestInterface request
     */
    public function createRequest(string $method, UriInterface|string $uri): RequestInterface;
}
