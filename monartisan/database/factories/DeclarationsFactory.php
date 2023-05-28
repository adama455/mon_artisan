<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Declarations>
 */
class DeclarationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assurance' => Str::random(10),
            'numero_police' => fake()->numerify('##########'),
            'nom_complet' =>  fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'contact1' => fake()->numerify('##########'),
            'contact2' => fake()->numerify('##########') ,
            'lieu' => Str::random(6),
            'date' => now(),
            'details' => Str::random(25),
        ];
    }
}
