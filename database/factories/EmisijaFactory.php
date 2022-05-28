<?php

namespace Database\Factories;

use App\Models\Televizija;
use App\Models\Voditelj;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmisijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(),
            'trajanje' => $this->faker->numberBetween($min = 1, $max = 150),
            'dan' => $this->faker->dayOfWeek(),
            'televizija_id' => Televizija::factory(),
            'voditelj_id' => Voditelj::factory(),
        ];
    }
}
