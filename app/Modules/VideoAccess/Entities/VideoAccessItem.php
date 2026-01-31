<?php

namespace App\Modules\VideoAccess\Entities;

final class VideoAccessItem
{
    public function __construct(
        public readonly int $lessonId,
        public readonly string $signedUrl,
    ) {
    }
}
