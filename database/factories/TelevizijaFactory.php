<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TelevizijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->unique()->word(),
            'grad' => $this->faker->city(),
            'direktor' => $this->faker->unique()->name(),
        ];
    }
}
