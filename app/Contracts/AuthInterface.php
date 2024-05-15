<?php

<<<<<<< Updated upstream
declare(strict_types = 1);

namespace App\Contracts;

use App\DataObjects\RegisterUserData;
use App\Enum\AuthAttemptStatus;

=======
namespace App\Contracts;

>>>>>>> Stashed changes
interface AuthInterface
{
    public function user(): ?UserInterface;

<<<<<<< Updated upstream
    public function attemptLogin(array $credentials): AuthAttemptStatus;
=======
    public function attemptLogin(array $data): bool;
>>>>>>> Stashed changes

    public function checkCredentials(UserInterface $user, array $credentials): bool;

    public function logOut(): void;
<<<<<<< Updated upstream

    public function register(RegisterUserData $data): UserInterface;

    public function logIn(UserInterface $user): void;

    public function attemptTwoFactorLogin(array $data): bool;
}
=======
}
>>>>>>> Stashed changes
