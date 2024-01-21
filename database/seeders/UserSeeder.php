<?php

namespace Database\Seeders;

use App\Models\User;
use App\Constants\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datum = [
            [
                'name' => 'Admin',
                'email' => 'admin@app.com',
                'user_name' => null,
                'role' => 1,
                'gender' => Gender::MALE,
                'removable' => 0,
                'password' => bcrypt('##Zxc1234'),
            ],
        ];
        User::insert($datum);
    }
}
