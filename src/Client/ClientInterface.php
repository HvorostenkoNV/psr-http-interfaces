<?php

declare(strict_types=1);

namespace Psr\Http\Client;

use Psr\Http\{
    Message\RequestInterface,
    Message\ResponseInterface,
};

/**
 * Client interface.
 */
interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request request
     *
     * @throws ClientExceptionInterface error happens while processing the request
     *
     * @return ResponseInterface response
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}
