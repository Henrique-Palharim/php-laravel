<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{ 
    public function run(): void
    {
        $dados = [
            'name' => 'Bicudo',
            'email' => 'bicudo@email',
            'password' => bcrypt('123')
        ];

        User::create($dados);
    }
}