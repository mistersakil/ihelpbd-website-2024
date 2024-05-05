<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = '12345678#';
        User::create([
            'name'              => 'Super Admin',
            'email'             => 'admin@gmail.com',
            'password'          => $password,
            'is_active'         => 1,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        User::create([
            'name'              => 'sakil jomadder',
            'email'             => 'sakil@gmail.com',
            'password'          => $password,
            'is_active'         => 1,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name'          => fake()->name(),
                'email'         => fake()->unique()->safeEmail(),
                'mobile_number' => fake()->unique()->phoneNumber(),
                'is_active'     => rand(0, 1),
                'password'      => $password,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
