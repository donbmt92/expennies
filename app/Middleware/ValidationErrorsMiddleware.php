<?php

<<<<<<< Updated upstream
declare(strict_types = 1);

namespace App\Middleware;

use App\Contracts\SessionInterface;
=======
declare(strict_types=1);

namespace App\Middleware;

>>>>>>> Stashed changes
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Views\Twig;

class ValidationErrorsMiddleware implements MiddlewareInterface
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
        if ($errors = $this->session->getFlash('errors')) {
            $this->twig->getEnvironment()->addGlobal('errors', $errors);
        }

=======
        if (!empty($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            $this->twig->getEnvironment()->addGlobal('errors', $errors);

            unset($_SESSION['errors']);
        }
>>>>>>> Stashed changes
        return $handler->handle($request);
    }
}
