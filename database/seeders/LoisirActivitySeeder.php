<?php

namespace Database\Seeders;

use App\Models\LoisirActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoisirActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LoisirActivity::factory()->count(12)->create();
        
    }
}
