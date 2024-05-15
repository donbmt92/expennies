<?php

declare(strict_types=1);

use App\Config;
<<<<<<< Updated upstream
use App\Enum\AppEnvironment;
use App\Middleware\CsrfFieldsMiddleware;
=======
use App\Middleware\AuthennicateMiddleware;
>>>>>>> Stashed changes
use App\Middleware\OldFormDataMiddleware;
use App\Middleware\StartSessionsMiddleware;
use App\Middleware\ValidationErrorsMiddleware;
use App\Middleware\ValidationExceptionMiddleware;
<<<<<<< Updated upstream
use Clockwork\Support\Slim\ClockworkMiddleware;
=======
>>>>>>> Stashed changes
use Slim\App;
use Slim\Middleware\MethodOverrideMiddleware;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Clockwork\Clockwork;

return function (App $app) {
    $container = $app->getContainer();
    $config = $container->get(Config::class);

<<<<<<< Updated upstream
    $app->add(MethodOverrideMiddleware::class);
    $app->add(CsrfFieldsMiddleware::class);
    $app->add('csrf');
=======
    $app->add(AuthennicateMiddleware::class);
>>>>>>> Stashed changes
    $app->add(TwigMiddleware::create($app, $container->get(Twig::class)));
    $app->add(ValidationExceptionMiddleware::class);
    $app->add(ValidationErrorsMiddleware::class);
    $app->add(OldFormDataMiddleware::class);
    $app->add(StartSessionsMiddleware::class);
<<<<<<< Updated upstream
    if (AppEnvironment::isDevelopment($config->get('app_environment'))) {
        $app->add(new ClockworkMiddleware($app, $container->get(Clockwork::class)));
    }
    $app->addBodyParsingMiddleware();
=======
>>>>>>> Stashed changes
    $app->addErrorMiddleware(
        (bool)$config->get('display_error_details'),
        (bool)$config->get('log_errors'),
        (bool)$config->get('log_error_details')
    );
};