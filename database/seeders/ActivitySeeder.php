<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $activities = [
            [
                'title' => 'FOIRES',
                'description' => 'Organisation de la Cameroon Digital Week à Yaoundé du 1er au 6 Août 2023; Organisation en partenariat avec CAHUNET le Festival de l’Aéroport à la Base aérienne de Yaoundé du … au … Décembre 2023.',
                'icon' => 'fas fa-shopping-cart',
            ],
            [
                'title' => 'SALONS',
                'description' => 'Organisation du café de l’investisseur chaque mois.',
                'icon' => 'fas fa-laptop',
            ],
            [
                'title' => 'SEMINAIRES ET FORMATIONS',
                'description' => 'Organisation des différentes formations (tissage des pagnes locaux, agriculture, petites industries, cyber sécurité…).',
                'icon' => 'fas fa-lock',
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create([
                'title' => $activity['title'],
                'description' => $activity['description'],
                'icon' => $activity['icon'],
            ]);
        }
    }
}
