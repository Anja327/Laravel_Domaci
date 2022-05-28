<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VoditeljFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'plata' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 50000, $max = 500000),
            'instagram' => $this->faker->unique()->domainWord(),
        ];
    }
}
