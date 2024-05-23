<?php

namespace Database\Seeders;

use App\Models\Kazi;
use Illuminate\Database\Seeder;

class KaziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kazi::factory()->count(5)->create();
    }
}
