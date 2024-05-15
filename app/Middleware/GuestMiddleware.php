<?php

<<<<<<< Updated upstream
declare(strict_types = 1);

namespace App\Middleware;

use App\Contracts\SessionInterface;
=======
namespace App\Middleware;

>>>>>>> Stashed changes
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class GuestMiddleware implements MiddlewareInterface
{
<<<<<<< Updated upstream
    public function __construct(
        private readonly ResponseFactoryInterface $responseFactory,
        private readonly SessionInterface $session
    ) {
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if ($this->session->get('user')) {
            return $this->responseFactory->createResponse(302)->withHeader('Location', '/');
        }

        return $handler->handle($request);
    }
}
=======

    public function __construct(private readonly ResponseFactoryInterface $responseFactory) { }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if (! empty($_SESSION['user'])) {
            return $this->responseFactory->createResponse(302)->withHeader('Location', '/');
        }
        return $handler->handle($request);
    }
}
>>>>>>> Stashed changes
