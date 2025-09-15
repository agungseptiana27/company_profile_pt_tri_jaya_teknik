<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['id' => 1, 'name' => 'Admin'],
            ['id' => 2, 'name' => 'Staff'],
            ['id' => 3, 'name' => 'User'],
        ]);
    }
}
