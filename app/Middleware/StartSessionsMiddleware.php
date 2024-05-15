<?php

<<<<<<< Updated upstream
declare(strict_types = 1);
=======
declare(strict_types=1);
>>>>>>> Stashed changes

namespace App\Middleware;

use App\Contracts\SessionInterface;
<<<<<<< Updated upstream
use App\Services\RequestService;
=======
>>>>>>> Stashed changes
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class StartSessionsMiddleware implements MiddlewareInterface
{
<<<<<<< Updated upstream
    public function __construct(
        private readonly SessionInterface $session,
        private readonly RequestService $requestService
    ) {
    }
=======
    public function __construct(private readonly SessionInterface $session,) { }
>>>>>>> Stashed changes

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->session->start();

        $response = $handler->handle($request);

<<<<<<< Updated upstream
        if ($request->getMethod() === 'GET' && ! $this->requestService->isXhr($request)) {
            $this->session->put('previousUrl', (string) $request->getUri());
        }

        $this->session->save();

=======
        $this->session->save();
>>>>>>> Stashed changes
        return $response;
    }
}
