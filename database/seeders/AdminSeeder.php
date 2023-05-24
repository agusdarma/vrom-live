<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds. php artisan db:seed --class=AdminSeeder
     */
    public function run()
    {
        // Create new user with role admin
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'agusdk2011@gmail.com',
            'password' => bcrypt('password'),
            'roles' => 'admin',
        ]);
    }
}
