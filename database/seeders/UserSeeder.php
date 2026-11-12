<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['username' => 'admin1', 'full_name' => 'Emilia LeBlanc', 'role' => 'Administrator', 'avatar' => '1790968982_fb6f766716b3cb7f7095.jpg'],
            ['username' => 'ceo', 'full_name' => 'Sarah Fortune', 'role' => 'Ceo', 'avatar' => null],
            ['username' => 'manager', 'full_name' => 'Sona Buvelle', 'role' => 'Manager', 'avatar' => null],
            ['username' => 'director', 'full_name' => 'Caitlyn Kiramman', 'role' => 'Director', 'avatar' => null],
            ['username' => 'accountant', 'full_name' => 'Annie Hastur', 'role' => 'Accountant', 'avatar' => null],
        ]);
    }
}