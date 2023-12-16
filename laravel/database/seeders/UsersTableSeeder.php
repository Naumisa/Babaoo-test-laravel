<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('P4ssw0rd'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
