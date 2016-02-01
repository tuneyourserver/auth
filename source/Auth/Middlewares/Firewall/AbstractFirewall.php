<?php
namespace Spiral\Auth\Middlewares\Firewall;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Spiral\Http\MiddlewareInterface;

abstract class AbstractFirewall implements MiddlewareInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(Request $request, Response $response, callable $next)
    {

    }
}