<?php

declare(strict_types=1);

namespace Psr\Http\Message;

use InvalidArgumentException;

/**
 * URI factory interface.
 */
interface UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @param string $uri the URI to parse
     *
     * @throws InvalidArgumentException given URI cannot be parsed
     *
     * @return UriInterface URI
     */
    public function createUri(string $uri = ''): UriInterface;
}
