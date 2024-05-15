<?php

<<<<<<< Updated upstream
declare(strict_types = 1);

namespace App\Contracts;

use App\DataObjects\RegisterUserData;

interface UserProviderServiceInterface
{
=======
namespace App\Contracts;

interface UserProviderServiceInterface
{

>>>>>>> Stashed changes
    public function getById(int $userId): ?UserInterface;

    public function getByCredentials(array $credentials): ?UserInterface;

<<<<<<< Updated upstream
    public function createUser(RegisterUserData $data): UserInterface;

    public function verifyUser(UserInterface $user): void;

    public function updatePassword(UserInterface $user, string $password): void;
}
=======
}
>>>>>>> Stashed changes
