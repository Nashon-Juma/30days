<?php

namespace Database\Seeders;

use App\Models\Kazi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Kazi::factory()->count(5)->create();
        Tags::factory()->count(5)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' =>  bcrypt('123'),
           'remember_token' => Str::random(10),
        ]);
    }
}
