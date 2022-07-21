<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "photo"=>$this->faker->imageUrl($width = 640, $height = 480 ,'cats'),
            "name"=>$this->faker->name(),
            "price"=>$this->faker->randomFloat(2,50,1000),
            "description"=>$this->faker->paragraph(),
            "category_id"=>Category::factory(),
        ];
    }
}
