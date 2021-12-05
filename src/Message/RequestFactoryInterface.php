<?php
declare(strict_types=1);

namespace Psr\Http\Message;
/** ***********************************************************************************************
 * Request factory interface.
 *
 * @package HNV\Psr\Http\Interfaces
 * @author  Hvorostenko
 *************************************************************************************************/
interface RequestFactoryInterface
{
    /** **********************************************************************
     * Create a new request.
     *
     * @param   string              $method     The HTTP method associated with the request.
     * @param   UriInterface|string $uri        The URI associated with the request.
     *
     * @return  RequestInterface                Request.
     ************************************************************************/
    public function createRequest(string $method, UriInterface|string $uri): RequestInterface;
}
