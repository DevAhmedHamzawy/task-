<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'name' => $this->faker->text(),
            'price' => $this->faker->numberBetween(0,10),
            'description' => $this->faker->text(),
            'rate' => $this->faker->numberBetween(0,10),
        ];
    }
}
