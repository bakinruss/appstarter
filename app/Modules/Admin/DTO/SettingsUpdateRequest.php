<?php

namespace App\Modules\Admin\DTO;

final class SettingsUpdateRequest
{
    public function __construct(
        public readonly string $key,
        public readonly string $value,
    ) {
    }
}
