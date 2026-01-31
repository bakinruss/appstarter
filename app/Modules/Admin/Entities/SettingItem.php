<?php

namespace App\Modules\Admin\Entities;

final class SettingItem
{
    public function __construct(
        public readonly string $key,
        public readonly string $value,
    ) {
    }
}
