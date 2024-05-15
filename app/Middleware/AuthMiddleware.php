<?php

declare(strict_types = 1);

namespace App\Middleware;

use App\Contracts\AuthInterface;
<<<<<<< Updated upstream
use App\Contracts\EntityManagerServiceInterface;
=======
>>>>>>> Stashed changes
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
<<<<<<< Updated upstream
use Slim\Routing\RouteContext;
use Slim\Views\Twig;
=======
>>>>>>> Stashed changes

class AuthMiddleware implements MiddlewareInterface
{
    public function __construct(
        private readonly ResponseFactoryInterface $responseFactory,
<<<<<<< Updated upstream
        private readonly AuthInterface $auth,
        private readonly Twig $twig,
        private readonly EntityManagerServiceInterface $entityManagerService
=======
        private readonly AuthInterface $auth
>>>>>>> Stashed changes
    ) {
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if ($user = $this->auth->user()) {
<<<<<<< Updated upstream
            $this->twig->getEnvironment()->addGlobal('auth', ['id' => $user->getId(), 'name' => $user->getName()]);
            $this->twig->getEnvironment()->addGlobal(
                'current_route',
                RouteContext::fromRequest($request)->getRoute()->getName()
            );

            $this->entityManagerService->enableUserAuthFilter($user->getId());

=======
>>>>>>> Stashed changes
            return $handler->handle($request->withAttribute('user', $user));
        }

        return $this->responseFactory->createResponse(302)->withHeader('Location', '/login');
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
