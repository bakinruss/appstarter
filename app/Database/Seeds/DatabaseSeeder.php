<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Wrapper seeder to support CodeIgniter default Seeds path.
 * Делегирует выполнение в оригинальный сидер в App\Database\Seeders.
 */
class DatabaseSeeder extends Seeder
{
    public function __construct(...$params)
    {
        // Передать все аргументы в родительский конструктор (совместимость с разными сигнатурами)
        parent::__construct(...$params);
    }
    public function run()
    {
        // Вызов оригинального сидера из папки Seeders
        $original = new \App\Database\Seeders\DatabaseSeeder();
        $original->run();
    }
}


