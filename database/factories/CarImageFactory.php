<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image_path" => fake()->imageUrl(),
            "position" => function (array $attributes) {
                return Car::find($attributes['car_id'])->CarImage()->count() + 1;
            }
        ];
    }
}
