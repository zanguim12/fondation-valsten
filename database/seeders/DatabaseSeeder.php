<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LoisirActivity;
use App\Models\SportActivity;
use App\Models\TechnologyNumericActivity;
use App\Models\VillageArtsActivity;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        LoisirActivity::factory()->count(12)->create();
        SportActivity::factory()->count(5)->create();
        TechnologyNumericActivity::factory()->count(7)->create();
        VillageArtsActivity::factory()->count(8)->create();
        
    }
}
