<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JourneeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'heureDebut' => $this->faker->time(),
            'heureFin' => $this->faker->time(),
            'typeDon' => rand(0, 2)
        ];
    }
}
