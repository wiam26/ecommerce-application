<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => fake()->name(),
            'Prenom' => fake()->name(),
            'Email' => fake()->unique()->safeEmail(),
            'Photo' => "Photos/photo1",
            'Date_Naissance' => fake()->date(),
        ];
    }
}
