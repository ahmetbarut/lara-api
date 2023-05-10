<?php

namespace Database\Factories;

use App\Models\City;
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
        $city = City::get()->random();
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'images' => [
                $this->faker->imageUrl(),
                $this->faker->imageUrl()
            ],
            'city_id' => $city->id,
        ];
    }
}
