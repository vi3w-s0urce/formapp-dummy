<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "User 1",
            "email" => "user1@example.com",
            "password" => "password"
        ]);
        User::create([
            "name" => "User 2",
            "email" => "user2@example.com",
            "password" => "password"
        ]);
        User::create([
            "name" => "User 3",
            "email" => "user3@gmail.com",
            "password" => "password"
        ]);
        User::create([
            "name" => "User 4",
            "email" => "user4@gmail.com",
            "password" => "password"
        ]);
    }
}
