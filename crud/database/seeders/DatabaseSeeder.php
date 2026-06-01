<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\UsusarioSeeder;

class DatabaseSeeder extends UsuarioSeeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call(UsuarioSeeder::class);
    }
}
