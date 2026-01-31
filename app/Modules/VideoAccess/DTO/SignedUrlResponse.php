<?php

namespace App\Modules\VideoAccess\DTO;

final class SignedUrlResponse
{
    public function __construct(
        public readonly string $url,
        public readonly int $expiresIn,
    ) {
    }
}
