<?php

declare(strict_types = 1);

namespace App\DataObjects;

use App\Enum\SameSite;

class SessionConfig
{
    public function __construct(
        public readonly string $name,
<<<<<<< Updated upstream
        public readonly string $flashName,
=======
>>>>>>> Stashed changes
        public readonly bool $secure,
        public readonly bool $httpOnly,
        public readonly SameSite $sameSite
    ) {
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes
