<?php

namespace Database\Seeders;

use App\Models\EventsActivities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        EventsActivities::factory()->count(12)->create();
    }
}
