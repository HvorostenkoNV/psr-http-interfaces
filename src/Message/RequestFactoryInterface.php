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
     */
    public function createRequest(string $method, UriInterface|string $uri): RequestInterface;
}
