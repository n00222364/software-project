<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beach>
 */
class BeachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true) . 'Beach',
            'description' => $this->faker->paragraph(),
            'latitude'=>$this->faker->latitude(51.4, 55.4),
            'longitude' =>$this->faker->longitude(-10.5, 6.0),
            'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/TEST' . $this->faker->unique()->numberBetween(1000, 9999),
            'water_quality_status' => $this->faker->randomElement(['Excellent', 'Good', 'Sufficient', 'Poor']),
            'e_coli' => $this->faker->numberBetween(10, 500),
            'intestinal_enterococci' => $this->faker->numberBetween(5, 200),
        ];
    }
}
