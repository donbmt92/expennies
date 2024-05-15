<?php

declare(strict_types = 1);

namespace App\Middleware;

<<<<<<< Updated upstream
use App\Contracts\SessionInterface;
=======
>>>>>>> Stashed changes
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Views\Twig;

class OldFormDataMiddleware implements MiddlewareInterface
{
<<<<<<< Updated upstream
    public function __construct(
        private readonly Twig $twig,
        private readonly SessionInterface $session
    ) {
=======
    public function __construct(private readonly Twig $twig)
    {
>>>>>>> Stashed changes
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
<<<<<<< Updated upstream
        if ($old = $this->session->getFlash('old')) {
            $this->twig->getEnvironment()->addGlobal('old', $old);
=======
        if (! empty($_SESSION['old'])) {
            $old = $_SESSION['old'];

            $this->twig->getEnvironment()->addGlobal('old', $old);

            unset($_SESSION['old']);
>>>>>>> Stashed changes
        }

        return $handler->handle($request);
    }
}
