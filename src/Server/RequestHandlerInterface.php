<?php
declare(strict_types=1);

namespace Psr\Http\Server;

use Psr\Http\{
    Message\ResponseInterface,
    Message\ServerRequestInterface,
};
/** ***********************************************************************************************
 * Handles a server request and produces a response.
 * An HTTP request handler process an HTTP request in order to produce an HTTP response.
 *
 * @package HNV\Psr\Http\Interfaces
 * @author  Hvorostenko
 *************************************************************************************************/
interface RequestHandlerInterface
{
    /** **********************************************************************
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     *
     * @param   ServerRequestInterface $request     Request.
     *
     * @return  ResponseInterface                   Response.
     ************************************************************************/
    public function handle(ServerRequestInterface $request): ResponseInterface;
}
