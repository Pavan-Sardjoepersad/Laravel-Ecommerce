<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $products = [
            'Nike Air MX Super',
            'Adidas Originals',
            'New Balance Sweater',
            'UnderArmour Cap',
            'Asics Track Shoes',
        ];
        
        
        $randomProduct = $products[rand(0, count($products) - 1)];

        return [
            'name' => $randomProduct,
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(50,120),
            'slug' => Str::slug($randomProduct, '-')


        ];
    }
}
