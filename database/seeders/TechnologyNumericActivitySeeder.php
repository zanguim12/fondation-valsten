<?php

namespace Database\Seeders;

use App\Models\TechnologyNumericActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyNumericActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [ //loisir
            [
                'title' => 'FOIRES',
                'sub_title' => 'Cameroon Digital Week',
                'short_description' => 'Organisation de la Cameroon Digital Week à Yaoundé du 1er au 6 Août 2023; Organisation en partenariat avec CAHUNET le Festival de l’Aéroport à la Base aérienne de Yaoundé du … au … Décembre 2023.',
                'long_description' => 'Organisation de la Cameroon Digital Week à Yaoundé du 1er au 6 Août 2023; Organisation en partenariat avec CAHUNET le Festival de l’Aéroport à la Base aérienne de Yaoundé du … au … Décembre 2023.',
                'image_path' => 'assets/img/portfolio/tn0.jpeg',
            ],
            [
                'title' => 'SALONS',
                'sub_title' => 'Café de l’investisseur',
                'short_description' => 'Organisation du café de l’investisseur chaque mois.',
                'long_description' => 'Organisation du café de l’investisseur chaque mois.',
                'image_path' => 'assets/img/portfolio/tn1.jpeg',
            ],
            [
                'title' => 'SEMINAIRES ET FORMATIONS',
                'sub_title' => 'Formations diverses',
                'short_description' => 'Organisation des différentes formations (tissage des pagnes locaux, agriculture, petites industries, cyber sécurité…).',
                'long_description' => 'Organisation des différentes formations (tissage des pagnes locaux, agriculture, petites industries, cyber sécurité…).',
                'image_path' => 'path/to/image3.jpg',
                
            ],
        ];

        foreach ($activities as $activity) {
            TechnologyNumericActivity::create([
                'title' => $activity['title'],
                'sub_title' => $activity['sub_title'],
                'short_description' => $activity['short_description'],
                'long_description' => $activity['long_description'],
                'image_path' => $activity['image_path'],
                
            ]);
        }
    }
}
