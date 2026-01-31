<?php

namespace App\Modules\VideoAccess\Services;

final class VideoAccessService
{
    public function signedUrlForLesson(int $lessonId, int $userId): array
    {
        // Заглушка: здесь будет проверка доступа и генерация signed URL
        $mockUrl = 'https://cdn.example.com/lessons/' . $lessonId . '/video.mp4?token=mock';

        return [
            'url' => $mockUrl,
            'expires_in' => 3600,
        ];
    }
}
