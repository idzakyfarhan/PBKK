<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'admin1',
            'email' => 'admin111abc@gmail.com',
            'password' => 'Admin111abc!?'
        ]);

        User::create([
            'name' => 'admin2',
            'email' => 'admin222abc@gmail.com',
            'password' => 'Admin111abc!?'
        ]);
    }
}
