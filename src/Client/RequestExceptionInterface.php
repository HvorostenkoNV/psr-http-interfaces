<?php
declare(strict_types=1);

namespace Psr\Http\Client;

use Psr\Http\Message\RequestInterface;
/** ***********************************************************************************************
 * Exception for when a request failed.
 *
 * Examples:
 *     - Request is invalid (e.g. method is missing)
 *     - Runtime request errors (e.g. the body stream is not seekable)
 *
 * @package HNV\Psr\Http\Interfaces
 * @author  Hvorostenko
 *************************************************************************************************/
interface RequestExceptionInterface extends ClientExceptionInterface
{
    /** **********************************************************************
     * Returns the request.
     *
     * The request object MAY be a different object from the one
     * passed to ClientInterface::sendRequest().
     *
     * @return RequestInterface             Request.
     ************************************************************************/
    public function getRequest(): RequestInterface;
}
