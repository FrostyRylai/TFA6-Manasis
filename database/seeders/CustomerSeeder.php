<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Luna Moonfang', 'email' => 'luna@gmail.com', 'phone' => '09123456781'],
            ['full_name' => 'Lanaya', 'email' => 'lanaya@gmail.com', 'phone' => '09234567890'],
            ['full_name' => 'Traxex', 'email' => 'Traxex@gmail.com', 'phone' => '09345678901'],
            ['full_name' => 'Krobelus', 'email' => 'Krobelus@gmail.com', 'phone' => '09456789012'],
            ['full_name' => 'Slithice', 'email' => 'Slithice@gmail.com', 'phone' => '09567890123'],
            ['full_name' => 'Rylai Crestfall', 'email' => 'rylai10@gmail.com', 'phone' => '09319726872'],
        ]);
    }
}