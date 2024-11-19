<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Criar o usuário admin
        DB::table('users')->insert([
            'account_id' => 1, // Defina um account_id válido, ou crie um account antes
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com', // Defina o email do admin
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // Defina a senha (use o Hash para segurança)
            'owner' => true,
            'photo' => 'default.jpg', // Defina uma foto ou deixe null
            'remember_token' => null, // O token de lembrar, se necessário
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
    }
}
