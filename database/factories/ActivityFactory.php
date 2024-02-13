<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define activities and their descriptions
        $activities = [
            [
                'title' => 'FOIRES, SALONS, SEMINAIRES ET FORMATIONS',
                'description' => 'Organisation de la Cameroon Digital Week à Yaoundé du 1er au 6 Août 2023; Organisation en partenariat avec CAHUNET le Festival de l’Aéroport à la Base aérienne de Yaoundé du … au … Décembre 2023; Organisation du café de l’investisseur chaque mois; Organisation des différentes formations (tissage des pagnes locaux, agriculture, petites industries, cyber sécurité…).',
                'icon' => 'fas fa-shopping-cart',
            ],
            [
                'title' => 'Responsive Design',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
                'icon' => 'fas fa-laptop',
            ],
            [
                'title' => 'Web Security',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
                'icon' => 'fas fa-lock',
            ],
        ];

        // Randomly select an activity
        $activity = $this->faker->randomElement($activities);

        return [
            'title' => $activity['title'],
            'description' => $activity['description'],
            'icon' => $activity['icon'],
        ];
    }
}
