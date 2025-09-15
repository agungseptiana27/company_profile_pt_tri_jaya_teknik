<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admintjtk@gmail.com',
            'password' => 'admintjtk321',
            'role_id' => '1', // admin
            'email_verified_at' => now(),
        ]);
    }
}
